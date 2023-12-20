

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
  <div class="index" >
    <h1 >Student List</h1>

    <table>
        <thead>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">StudentID</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Major</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($students as $student): ?>
    <tr>
      <th scope="row"><?= $student['StudentID']?></th>
      <td><?= $student['FirstName']?></td>
      <td><?= $student['LastName']?></td>
      <td><?= $student['Major']?></td>
      <td>
    <a type="button" class="btn btn-success" href="index.php?action=view&id=<?= $student['StudentID'];?>">View</a>
    <a type="button" class="btn btn-warning" href="index.php?action=edit&id=<?= $student['StudentID'];?>">Edit</a>

<a type="button" class="btn btn-danger" href="index.php?action=delete&id=<?= $student['StudentID']; ?>">Delete</a>

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
</div>
</html>