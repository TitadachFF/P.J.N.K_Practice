

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h1>Edit Student</h1>

<form action="index.php?action=edit&id=<?= $students['StudentID']; ?>" method="post">

  

    <label for="firstName">FirstName:</label>
    <input type="text" id="firstName" name="firstName" value="<?= $students['FirstName']; ?>" required>
    <br>
    <label for="lastName">LastName:</label>
    <input type="text" id="lastName" name="lastName" value="<?= $students['LastName']; ?>" required>
<br>
    <label for="major">Major:</label>
    <br>
    <input type="text" id="major" name="major" value="<?= $students['Major']; ?>" required>
   

   
<br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

  </div>
</div>

   
</body>

</html>