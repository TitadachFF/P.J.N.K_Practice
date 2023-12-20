

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Match</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <h1>Professor Details</h1>

    <p>Professor ID: <?= $professors['ProfessorID']; ?></p>
    <p>First Name : <?= $professors['FirstName']; ?></p>
    <p>Last Name : <?= $professors['LastName']; ?></p>
    <p>Department: <?= $professors['Department']; ?></p>

    <a href="index.php?action=index">Back to Matches List</a>
</body>

</html>