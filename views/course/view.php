

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <h1>Course Details</h1>

    <p>Course ID: <?= $courses[0]['CourseID']; ?></p>
    <p>Major ID : <?= $courses[0]['MajorID']; ?></p>
    <p>Course Name: <?= $courses[0]['CourseName']; ?></p>

    <a href="index.php?action=index">Back to Course List</a>
</body>

</html>
