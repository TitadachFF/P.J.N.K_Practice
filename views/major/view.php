<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Major</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
</head>

<body>
    <div class="container mt-5" style="width: 500px;">
        <div class="card">
            <div class="card-body" style="width: 500px;">
                <h1 class="card-title">รายละเอียดรายวิชา</h1>

                <table class="table">
                    <tr>
                        <th>รหัสรายวิชา</th>
                        <td><?= $major['MajorID']; ?></td>
                    </tr>
                    <tr>
                        <th>รหัสอาจารย์ผู้สอน</th>
                        <td><?= $major['ProfessorID']; ?></td>
                    </tr>
                    <tr>
                        <th>รหัสประจำตัวนักศึกษา</th>
                        <td><?= $major['StudentID']; ?></td>
                    </tr>
                    <tr>
                        <th>ชื่อรายวิชา</th>
                        <td><?= $major['MajorName']; ?></td>
                    </tr>
                </table>

                <a style="width: 150px;" href="index.php?action=index" class="btn btn-primary d-block mx-auto">กลับสู่หน้ารายวิชา</a>
            </div>
        </div>
    </div>

   
</body>

</html>
