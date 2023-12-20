<?php


class MajorModel{
  private $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function getAllMajor(){
    $stmt = $this->pdo->query("SELECT * FROM major");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getMajorByID($majorId){
    $stmt = $this->pdo->prepare("SELECT * FROM major WHERE MajorID = :id");
    $stmt->execute(["id" => $majorId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function addMajor($data){
    $stmt = $this->pdo->prepare("INSERT INTO major (MajorID , ProfessorID , StudentID , MajorName) VALUES (:majorId , :ProfessorId , :studentId , :majorName)");
    $stmt->execute([
      "majorId" => $data["majorId"],
      "ProfessorId" => $data["ProfessorId"],
      "studentId" => $data["studentId"],
      "majorName" => $data["majorName"],
    ]);
  }
  public function deleteMajor($courseId)
    {
        $stmt = $this->pdo->prepare("DELETE FROM major WHERE MajorID = :id");
        $stmt->execute(["id" => $courseId]);
    }
  public function updateMajor($majorId, $data){
    $stmt = $this->pdo->prepare('UPDATE major SET ProfessorID = :ProfessorId, StudentID = :studentId, majorName = :majorName WHERE MajorID = :id');
    $stmt->execute([
      'id' => $majorId,
      'ProfessorId' => $data['ProfessorId'],
      'studentId' => $data['studentId'],
      'majorName' => $data['majorName'],
    ]);
  }
}


?>
