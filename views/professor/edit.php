

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>


  <h1>Edit Professor</h1>

<form action="index.php?action=edit&id=<?= $professors['ProfessorID']; ?>" method="post">

    <label for="firstName">First Name:</label>
 
    <input type="text" id="firstName" name="firstName" value="<?= $professors['FirstName']; ?>" required>
    <br>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" value="<?= $professors['LastName']; ?>" required>
<br>
    <label for="department">Department:</label>
    <input type="text" id="department" name="department" value="<?= $professors['Department']; ?>" required>

   

   
<br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>



   
</body>

</html>