

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <h1 >Student Details</h1>

    <p>Student ID: <?= $students['StudentID']; ?></p>
    <p>First Name: <?= $students['FirstName']; ?></p>
    <p>Last Name: <?= $students['LastName']; ?></p>
    <p>Major: <?= $students['Major']; ?></p>

    <a href="index.php?action=index">Back to Student List</a>
</body>

</html>