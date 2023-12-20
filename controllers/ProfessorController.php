<?php


require_once(__DIR__ . "/../models/ProfessorsModel.php");

class ProfessorController{
  private $pdo;
  private $ProfessorsModel;

  public function __construct($pdo){
    $this->pdo = $pdo;
    $this->ProfessorsModel = new ProfessorModel($pdo);
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
    $professors = $this->ProfessorsModel->getAllProfessor();
    include 'views/professor/index.php'; 
  }

  private function delete(){
    $studentId = $_GET['id'] ?? null;
    if ($studentId) {
        $this->ProfessorsModel->deleteProfessor($studentId);
        header('Location: index.php?action=index');
        exit();
    } else {
        $this->defaultAction();
    }
  }

  private function view(){
    $professorId = $_GET['id'] ?? null;
    if ($professorId) {
      $professors = $this->ProfessorsModel->getProfessorById($professorId);
      include 'views/professor/view.php'; 
    } else {
        $this->defaultAction();
    }
  }

  private function add(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $this->ProfessorsModel->addProfessor($_POST);
          header('Location: index.php?action=index');
          exit();
      } else {
          include 'views/professor/add.php';
      }
  }

  private function edit(){
      $professorId = $_GET['id'] ?? null;
      if ($professorId) {
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $this->ProfessorsModel->updateProfessor($professorId, $_POST);
              header("Location: index.php?action=view&id=$professorId");
              exit();
          } else {
              $professors = $this->ProfessorsModel->getProfessorById($professorId);
              include 'views/professor/edit.php'; 
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


