

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Add Student</h1>

    <form action="index.php?action=add" method="post">

        <label for="studentId">Student ID:</label>
        <input type="text" id="studentId" name="studentId" required>
        <br>

        <label for="firstName">Fisrt Name:</label>
        <input type="text" id="firstName" name="firstName" required>
        <br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>
        <br>

        <label for="major">Major :</label>
        <input type="text" id="major" name="major" required>
<br>
       <br>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
<br>
    <a type="button" class="btn btn-primary" href="index.php?action=index">Back to Matches List</a>
</body>

</html>