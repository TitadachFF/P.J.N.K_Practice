<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายวิชา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
</head>

<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="width: 500px;">
            <div class="card-body">
                <h1 class="card-title text-center">เพิ่มรายวิชา</h1>
                <form action="index.php?action=add" method="post">
                    <div class="mb-3">
                        <label for="majorId" class="form-label">รหัสรายวิชา</label>
                        <input type="text" class="form-control" id="majorId" name="majorId" required>
                    </div>
                    <div class="mb-3">
                        <label for="ProfessorId" class="form-label">รหัสอาจารย์ผู้สอน</label>
                        <input type="text" class="form-control" id="ProfessorId" name="ProfessorId" required>
                    </div>
                    <div class="mb-3">
                        <label for="studentId" class="form-label">รหัสประจำตัวนักศึกษา</label>
                        <input type="text" class="form-control" id="studentId" name="studentId" required>
                    </div>
                    <div class="mb-3">
                        <label for="majorName" class="form-label">ชื่อรายวิชา</label>
                        <input type="text" class="form-control" id="majorName" name="majorName" required>
                    </div>
                    <div class="text-center">
                        <a href="index.php?action=index" class="btn btn-secondary">กลับสู่รายวิชา</a>
                        <button type="submit" class="btn btn-primary">เพิ่มรายวิชา</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
