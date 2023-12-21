<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการหลักสูตร</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <div class="container mt-5" style="text-align: center; ">

        <h1>รายการหลักสูตร</h1>

        <div class="card mt-5">
            <div class="card-header">
                ตารางหลักสูตร
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">รหัสหลักสูตร</th>
                            <th scope="col">รหัสรายวิชา</th>
                            <th scope="col">ชื่อหลักสูตร</th>
                            <th scope="col">การเเก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($courses as $course) : ?>
                            <tr>
                                <th scope="row"><?= $course['CourseID']; ?></th>
                                <td><?= $course['MajorID']; ?></td>
                                <td><?= $course['CourseName']; ?></td>
                                <td>
                                    <a type="button" class="btn btn-success" href="index.php?action=view&id=<?= $course['CourseID']; ?>">ดูรายละเอียด</a>
                                    <a type="button" class="btn btn-warning" href="index.php?action=edit&id=<?= $course['CourseID']; ?>">เเก้ไข</a>
                                    <a type="button" class="btn btn-danger" href="index.php?action=delete&id=<?= $course['CourseID']; ?>">ลบ</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <a href="index.php?action=add" class="mt-5 btn btn-primary">เพิ่มหลักสูตร</a>
    </div>

</body>

</html>
