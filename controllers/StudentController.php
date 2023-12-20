<?php

require_once(__DIR__ . "/../models/StudentModel.php");

class StudentController{
  private $pdo;
  private $studentModel;

  public function __construct($pdo){
    $this->pdo = $pdo;
    $this->studentModel = new StudentModel($pdo);
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
    $students = $this->studentModel->getAllStudent();
    include 'views/student/index.php'; 
  }

  private function delete(){
    $studentId = $_GET['id'] ?? null;
    if ($studentId) {
        $this->studentModel->deleteStudent($studentId);
        header('Location: index.php?action=index');
        exit();
    } else {
        $this->defaultAction();
    }
  }

  private function view(){
    $studentId = $_GET['id'] ?? null;
    if ($studentId) {
      $students = $this->studentModel->getStudentById($studentId);
      include 'views/student/view.php'; 
    } else {
        $this->defaultAction();
    }
  }

  private function add(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $this->studentModel->addStudent($_POST);
          header('Location: index.php?action=index');
          exit();
      } else {
          include 'views/student/add.php';
      }
  }

  private function edit(){
      $studentId = $_GET['id'] ?? null;
      if ($studentId) {
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $this->studentModel->updateStudent($studentId, $_POST);
              header("Location: index.php?action=view&id=$studentId");
              exit();
          } else {
              $students = $this->studentModel->getStudentById($studentId);
              include 'views/student/edit.php'; 
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

