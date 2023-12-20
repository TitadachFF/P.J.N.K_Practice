

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

  <h1>Edit Course</h1>

    <form action="index.php?action=edit&id=<?= $courses[0]['CourseID']; ?>" method="post">

    <label for="courseId">Course ID:</label>
    <input type="text" id="courseId" name="courseId" value="<?= $courses[0]['CourseID']; ?>" disabled>
    <br>
    <label for="majorId">MajorID:</label>
    <input type="text" id="majorId" name="majorId" value="<?= $courses[0]['MajorID']; ?>" required>
    <br>

    <label for="courseName">CourseName:</label>
    <input type="text" id="courseName" name="courseName" value="<?= $courses[0]['CourseName']; ?>" required>

   

   <br>
<br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<a href="index.php?actiom=index"></a>

   
</body>

</html>
