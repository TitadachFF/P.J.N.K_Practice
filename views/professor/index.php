

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
    <h1 >Professor List</h1>

    <table>
        <thead>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">ProfessorID</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($professors as $professor): ?>
    <tr>
      <th scope="row"><?= $professor['ProfessorID'];?></th>
      <td><?= $professor['FirstName'];?></td>
      <td><?= $professor['LastName'];?></td>
      <td><?= $professor['Department'];?></td>
      <td>
        <a type="button" class="btn btn-success" href="index.php?action=add&id=<?= $professor['ProfessorID'];?>">Add</a>
       <a type="button" class="btn btn-warning" href="index.php?action=edit&id=<?= $professor['ProfessorID'];?>">Edit</a>
       <a type="button" class="btn btn-danger" href="index.php?action=delete&id=<?= $professor['ProfessorID']; ?>">Delete</a>
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