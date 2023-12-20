<?php


class StudentModel{
  private $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function getAllStudent(){
    try{
      $stmt = $this->pdo->query("SELECT * FROM students");
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
      echo "error " . $e->getMessage();
    }
    
  }

  public function getStudentById($studentId){
    $stmt = $this->pdo->prepare("SELECT * FROM students WHERE StudentID = :id");
    $stmt->execute(["id" => $studentId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function addStudent($data){
    $stmt = $this->pdo->prepare("INSERT INTO students (FirstName , LastName , Major) VALUES (:firstName , :lastName , :major )");
    $stmt->execute([
      "firstName" => $data["firstName"],
      "lastName" => $data["lastName"],
      "major" => $data["major"],
    ]);
  }
  public function deleteStudent($studentId)
{
    $stmt = $this->pdo->prepare("DELETE FROM students WHERE StudentID = :id");
    $stmt->execute(["id" => $studentId]);
}
  public function updateStudent($studentId, $data){
    $stmt = $this->pdo->prepare('UPDATE students SET FirstName = :firstName, LastName = :lastName, Major = :major WHERE StudentID = :id');
    $stmt->execute([
      'id' => $studentId,
      'firstName' => $data['firstName'],
      'lastName' => $data['lastName'],
      'major' => $data['major'],
    ]);
  }
}


?>
