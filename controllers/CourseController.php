<?php

require_once(__DIR__ . "/../models/CourseModel.php");

class CourseController{
  private $pdo;
  private $CourseModel;

  public function __construct($pdo){
    $this->pdo = $pdo;
    $this->CourseModel = new CourseModel($pdo);
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
    $courses = $this->CourseModel->getAllCourse();
    include 'views/course/index.php'; 
  }

  private function view(){
    $currentUrl = "http";
    $currentUrl .= ($_SERVER['HTTPS'] ?? 'off') == 'on' ? 's' : '';
    $currentUrl .= "://";
    $currentUrl .= $_SERVER['HTTP_HOST'] ?? '';
    $currentUrl .= $_SERVER['REQUEST_URI'] ?? '';

    $Qstring = parse_url($currentUrl,PHP_URL_QUERY);
    $idSplit = explode("&" ,$Qstring);
    $courseNOID = explode("=", $idSplit[1]);
    $courseId = $courseNOID[1];
  
    $courses = $this->CourseModel->getCourseByID($courseId);
    //print_r($courses);
    include 'views/course/view.php'; 
     
  }

  private function delete(){
    $studentId = $_GET['id'] ?? null;
    if ($studentId) {
        $this->CourseModel->deleteCourse($studentId);
        header('Location: index.php?action=index');
        exit();
    } else {
        $this->defaultAction();
    }
  }
  private function add(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $this->CourseModel->addCourse($_POST);
          header('Location: index.php?action=index');
          exit();
      } else {
          include 'views/course/add.php';
      }
  }

  private function edit(){
      $courseId = $_GET['id'] ?? null;
      if ($courseId) {
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $this->CourseModel->updateCourse($courseId, $_POST);
              header("Location: index.php?action=view&id=$courseId");
              exit();
          } else {
              $courses = $this->CourseModel->getCourseByID($courseId);
              include 'views/course/edit.php'; 
          }
      } else {
          $this->defaultAction();
      }
  }

  private function defaultAction(){
      header('Location: index.php?action=course');
      exit();
  }
}



?>
