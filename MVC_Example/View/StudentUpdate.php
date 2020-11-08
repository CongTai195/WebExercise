<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Danh sách sinh viên:</h2>
    <?php
        for ($i = 0; $i < sizeof($studentList); $i++){
            ?>
            <p><?php echo ($studentList[$i]->id) ?> <a href="?stid=<?php echo ($studentList[$i]->id) ?>"><?php echo $studentList[$i]->name ?></a> <a href="?updateid=<?php echo ($studentList[$i]->id) ?>">Cập nhật</a></p>
            <?php
        }
    ?>
</body>
</html>