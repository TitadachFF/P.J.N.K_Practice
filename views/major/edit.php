<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เเก้ไขรายวิชา</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="card text-center" style="max-width: 400px; margin: auto;">
            <div class="card-header">
                <h1 class="mb-0">เเก้ไขรายวิชา</h1>
            </div>
            <div class="card-body">

                <form action="index.php?action=edit&id=<?= $major['MajorID']; ?>" method="post">

                    <div class="form-group text-left">
                        <label for="majorId">รหัสรายวิชา</label>
                        <input type="text" class="form-control" id="majorId" name="majorId" value="<?= $major['MajorID']; ?>" disabled>
                    </div>

                    <div class="form-group text-left">
                        <label for="ProfessorId">รหัสอาจารย์ผู้สอน</label>
                        <input type="text" class="form-control" id="ProfessorId" name="ProfessorId" value="<?= $major['ProfessorID']; ?>" required>
                    </div>

                    <div class="form-group text-left">
                        <label for="studentId">รหัสประจำตัวนักศึกษา</label>
                        <input type="text" class="form-control" id="studentId" name="studentId" value="<?= $major['StudentID']; ?>" required>
                    </div>

                    <div class="form-group text-left">
                        <label for="majorName">ชื่อรายวิชา</label>
                        <input type="text" class="form-control" id="majorName" name="majorName" value="<?= $major['MajorName']; ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">เเก้ไข</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
