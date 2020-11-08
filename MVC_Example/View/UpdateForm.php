<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Cập nhật</title>
</head>

<body>
    <form id="form" action="http://localhost/CNWeb18N13/MVC_Example/Controller/C_Student.php" method="POST" name="UpdateForm" class="FormAdd">
        <h1>Update</h1>
        <table>
            <?php
                include_once("../Model/Connect.php");
                $updateid = $_GET['updateid'];
                $query = "select * from sinhvien where ID = '$updateid'";
                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_array($result);
            ?>
            <tr>
                <th>ID</th>
                <td><input type="text" readonly value="<?php echo $row['id'] ?>" name="ID" id="ID"></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" value="<?php echo $row['name'] ?>" name="name" id="name"></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" value="<?php echo $row['age'] ?>" name="age" id="age"></td>
            </tr>
            <tr>
                <th>University</th>
                <td><input type="text" value="<?php echo $row['university'] ?>" name="university" id="university"></td>
            </tr>
        </table>
        <input class="submit" type="submit" value="Update" name="update">
        <input class="submit" type="button" value="Cancel" name="cancel" onclick="Cancel()">
    </form>
    <script>
        function Cancel() {
            window.history.back();
        }
    </script>
</body>

</html>