

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Major</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <h1>Major Details</h1>

    <p>Major ID: <?= $major['MajorID']; ?></p>
    <p>Professor ID: <?= $major['ProfessorID']; ?></p>
    <p>Student ID: <?= $major['StudentID']; ?></p>
    <p>Major Name: <?= $major['MajorName']; ?></p>
    <a href="index.php?action=index">Back to Major List</a>
</body>

</html>
