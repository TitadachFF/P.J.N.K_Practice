

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Major</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h1>Edit Major</h1>

<form action="index.php?action=edit&id=<?= $major['MajorID']; ?>" method="post">

    <label for="majorId">MajorID:</label>
    <br>
    <input type="text" id="majorId" name="majorId" value="<?= $major['MajorID']; ?>" disabled>

    <label for="ProfessorId">ProfessorID:</label>
    <input type="text" id="ProfessorId" name="ProfessorId" value="<?= $major['ProfessorID']; ?>" required>

    <label for="studentId">StudentID:</label>
    <input type="text" id="studentId" name="studentId" value="<?= $major['StudentID']; ?>" required>

    <label for="majorName">Major Name:</label>
    <input type="text" id="majorName" name="majorName" value="<?= $major['MajorName']; ?>" required>
   
<br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

  </div>
</div>

   
</body>

</html>
