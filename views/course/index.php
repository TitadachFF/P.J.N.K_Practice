

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css" />
 

</head>

<body>
    <h1 >Course List</h1>

    <table>
        <thead>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">CourseID</th>
      <th scope="col">MajorID</th>
      <th scope="col">CourseName</th>
  
    </tr>
  </thead>
          <tbody>
<?php foreach ($courses as $course) : ?>
    <tr>
      <th scope="row"><?= $course['CourseID'];?></th>
      <td><?= $course['MajorID'];?></td>
      <td><?= $course['CourseName']; ?></td>
      <td>
        <a type="button" class="btn btn-success" href="index.php?action=view&id=<?= $course['CourseID'];?>">View</a>
        <a type="button" class="btn btn-warning" href="index.php?action=edit&id=<?= $course['CourseID'];?>">Edit</a>
        <a type="button" class="btn btn-danger" href="index.php?action=delete&id=<?= $course['CourseID']; ?>">Delete</a>
      </td>   
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
  <a href="index.php?action=add">add</a>
        </thead>
        <tbody>
           
        </tbody>
    </table>
    <br>
    
   
    
</body>

</html>
