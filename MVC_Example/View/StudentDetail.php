<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Chi tiết sinh viên: </h2>
    <?php
        echo "ID: $student->id"."<br>";
        echo "Name: $student->name"."<br>";
        echo "Age: $student->age"."<br>";
        echo "University: $student->university"."<br>";
    ?>
</body>
</html>