<?php


require_once(__DIR__ . "/../models/MajorModel.php");

class MajorController{
  private $pdo;
  private $MajorModel;

  public function __construct($pdo){
    $this->pdo = $pdo;
    $this->MajorModel = new MajorModel($pdo);
  }

  public function run($action){
    switch ($action) {
      case 'index':
        $this->index();
        break;
      case 'view':
        $this->view();
        break;
      case 'add':
        $this->add();
        break;
      case 'edit':
        $this->edit();
        break;
      case 'delete':
        $this->delete();
        break;
      default:
        $this->defaultAction();
    }
  }

  private function index(){
    $major = $this->MajorModel->getAllMajor();
    include 'views/major/index.php'; 
  }

  private function delete(){
    $studentId = $_GET['id'] ?? null;
    if ($studentId) {
        $this->MajorModel->deleteMajor($studentId);
        header('Location: index.php?action=index');
        exit();
    } else {
        $this->defaultAction();
    }
  }
  private function view(){
    $majorId = $_GET['id'] ?? null;
    if ($majorId) {
      $major = $this->MajorModel->getMajorByID($majorId);
      include 'views/major/view.php'; 
    } else {
        $this->defaultAction();
    }
  }

  private function add(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $this->MajorModel->addMajor($_POST);
          header('Location: index.php?action=index');
          exit();
      } else {
          include 'views/major/add.php';
      }
  }

  private function edit(){
      $majorId = $_GET['id'] ?? null;
      if ($majorId) {
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $this->MajorModel->updateMajor($majorId, $_POST);
              header("Location: index.php?action=view&id=$majorId");
              exit();
          } else {
              $major = $this->MajorModel->getMajorByID($majorId);
              include 'views/major/edit.php'; 
          }
      } else {
          $this->defaultAction();
      }
  }

  private function defaultAction(){
      header('Location: index.php?action=index');
      exit();
  }
}




?>

