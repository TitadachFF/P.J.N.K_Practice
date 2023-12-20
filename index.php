<?php 

require_once './config/database.php';
require_once './controllers/CourseController.php';
require_once './controllers/MajorController.php';
require_once './controllers/ProfessorController.php';
require_once './controllers/StudentController.php';



$action = $_GET['action'] ;
$pdo = getPDO();

switch ($action) {
    case 'course':
        $controller = new CourseController($pdo);
        break;
    case 'major':
        $controller = new MajorController($pdo);
        break;
    case 'professor':
        $controller = new ProfessorController($pdo);
        break;
    case 'student':
        $controller = new StudentController($pdo);
        break;
    default:
        $controller = new MajorController($pdo);
}

$controller->run($action);

?>
