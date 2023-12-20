

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css" />
 

</head>

<body>
    <h1 >Major List</h1>

    <table>
        <thead>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">MajorID</th>
      <th scope="col">ProfessorID</th>
      <th scope="col">StudentID</th>
      <th scope="col">Majorname</th>
    </tr>
  </thead>
    <tbody>

    <?php foreach ($major as $majors): ?>
    <tr>
      <th scope="row"><?= $majors['MajorID'];?></th>
      <td><?= $majors['ProfessorID'];?></td>
      <td><?= $majors['StudentID'];?></td>
      <td><?= $majors['MajorName'];?></td>
      <td>
        <a type="button" class="btn btn-success" href="index.php?action=view&id=<?= $majors['MajorID'];?>">View</a>
        <a type="button" class="btn btn-warning" href="index.php?action=edit&id=<?= $majors['MajorID'];?>">Edit</a>
        <a type="button" class="btn btn-danger" href="index.php?action=delete&id=<?= $majors['MajorID']; ?>">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
    
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
