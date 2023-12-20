<?php


class CourseModel{
  private $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function getAllCourse(){
    $stmt = $this->pdo->query("SELECT * FROM course");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getCourseByID($courseId){
    $stmt = $this->pdo->prepare("SELECT * FROM course WHERE CourseID = :id");
    $stmt->bindParam("id" , $courseId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function addCourse($data){
    $stmt = $this->pdo->prepare("INSERT INTO course (CourseID , MajorID , CourseName) VALUES (:courseId , :majorId , :courseName)");
    $stmt->execute([
      "courseId" => $data["courseId"],
      "majorId" => $data["majorId"],
      "courseName" => $data["courseName"],
    ]);
  }
  public function deleteCourse($courseId)
    {
        $stmt = $this->pdo->prepare("DELETE FROM course WHERE CourseID = :id");
        $stmt->execute(["id" => $courseId]);
    }
  public function updateCourse($courseId, $data){
    $stmt = $this->pdo->prepare('UPDATE course SET MajorID = :majorId, CourseName = :courseName WHERE CourseID = :id');
    $stmt->execute([
        'id' => $courseId,
        'majorId' => $data['majorId'],
        'courseName' => $data['courseName'],
    ]);
}

}


?>
