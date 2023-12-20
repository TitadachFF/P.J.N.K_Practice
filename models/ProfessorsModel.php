<?php


class ProfessorModel{
  private $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function getAllProfessor(){
    $stmt = $this->pdo->query("SELECT * FROM Professors");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getProfessorById($ProfessorId){
    $stmt = $this->pdo->prepare("SELECT * FROM professors WHERE professorID = :id");
    $stmt->execute(["id" => $ProfessorId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  public function deleteProfessor($courseId)
    {
        $stmt = $this->pdo->prepare("DELETE FROM professors WHERE professorID = :id");
        $stmt->execute(["id" => $courseId]);
    }

  public function addProfessor($data){
    $stmt = $this->pdo->prepare("INSERT INTO professors (FirstName , LastName , Department) VALUES (:firstName , :lastName , :department )");
    $stmt->execute([
      "firstName" => $data["firstName"],
      "lastName" => $data["lastName"],
      "department" => $data["department"],
    ]);
  }
  public function updateProfessor($professorId, $data){
    $stmt = $this->pdo->prepare('UPDATE professors SET FirstName = :firstName, LastName = :lastName, Department = :department WHERE professorID = :id');
    $stmt->execute([
      'id' => $professorId,
      'firstName' => $data['firstName'],
      'lastName' => $data['lastName'],
      'department' => $data['department'],
    ]);
  }
}


?>
