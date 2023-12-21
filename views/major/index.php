<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายวิชา</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />

</head>

<body>
  <div class="container mt-5" style="text-align: center; ">

    <h1>รายวิชา</h1>

    <div class="card mt-5">
      <div class="card-header">
        ตารางรายวิชา
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">รหัสวิชา</th>
              <th scope="col">ชื่ออาจารย์ผู้สอน</th>
              <th scope="col">รหัสประจำตัวนักศึกษา</th>
              <th scope="col">ชื่อรายวิชา</th>
              <th scope="col">การเเก้ไข</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($major as $majors) : ?>
              <tr>
                <th scope="row"><?= $majors['MajorID']; ?></th>
                <td><?= $majors['ProfessorID']; ?></td>
                <td><?= $majors['StudentID']; ?></td>
                <td><?= $majors['MajorName']; ?></td>
                <td>
                  <a type="button" class="btn btn-success" href="index.php?action=view&id=<?= $majors['MajorID']; ?>">ดูรายละเอียด</a>
                  <a type="button" class="btn btn-warning" href="index.php?action=edit&id=<?= $majors['MajorID']; ?>">เเก้ไข</a>
                  <a type="button" class="btn btn-danger" href="index.php?action=delete&id=<?= $majors['MajorID']; ?>">ลบ</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <a href="index.php?action=add" class="mt-5 btn btn-primary">เพิ่มรายวิชา</a>
  </div>

</body>

</html>