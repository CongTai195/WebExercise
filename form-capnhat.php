<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Handlee', cursive;
            background-color: pink;
        }
        h1{
            text-align: center;
        }
        .FormUpdate{
            color: black;
            width: 380px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-80%);
        }
        .submit{
            background-color: #3fb6b2;
            padding: 12px 50px;
            border-radius: 5px;
            cursor: pointer;
            color: #ffffff;
            border: none;
            outline: none;
            margin: 0;
            font-weight: bold;
        }
        .submit:hover{
            background-color: #43a09d;
        } 
        table{
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <form id="form" action="http://localhost/CNWeb18N13/xulycapnhat.php" method="POST" name="FormUpdate" class="FormUpdate">
        <?php
            $link = mysqli_connect("localhost", "root", "");
            mysqli_select_db($link, "dulieu");
            $description = '';
            $namepb = '';
            $IDPB = $_GET['IDPB'];
            $query = "select * from phongban where IDPB = '$IDPB'";
            $result = mysqli_query($link, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = $result->fetch_array();
                $namepb = $row["tenpb"];
                $description = $row["Mota"];
            }
            ?>
        <h1>Cập nhật thông tin</h1>
        <table>
            <tr>
                <th>Mã phòng ban</th>
                <td><input type="text" readonly name="IDPB" id="IDPB" value="<?php echo $IDPB ?>"></td>
            </tr>
            <tr>
                <th>Tên phòng ban</th>
                <td><input type="text" name="tenpb" id="tenpb" value="<?php echo $namepb ?>"></td>
            </tr>
            <tr>
                <th>Mô tả</th>
                <td><input type="text" name="motapb" id="motapb" value="<?php echo $description ?>"></td>
            </tr>
        </table>
        <input class="submit" type="submit" value="Update" name="update">
        <input class="submit" type="button" value="Cancel" name="cancel" onclick="Cancel()">
    </form>
    <script>
        function Cancel(){
            window.history.back();
        }
    </script>
</body>
</html>