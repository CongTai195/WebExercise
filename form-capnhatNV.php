<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Cập nhật</title>
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
        select, option, input{
            font-size: 15px;
        }
        th{
            font-size: 18px;
        }
    </style>
</head>
<body onload="SetCBB()">
    <form id="form" action="http://localhost/CNWeb18N13/xulycapnhatNV.php" method="POST" name="FormUpdate" class="FormUpdate">
        <?php
            $link = mysqli_connect("localhost", "root", "");
            mysqli_select_db($link, "dulieu");
            $diachi = '';
            $hoten = '';
            $tenpb = '';
            $IDNV = $_GET['IDNV'];
            $query = "select IDNV, hoten, phongban.IDPB, tenpb, diachi from nhanvien inner join phongban on nhanvien.IDPB = phongban.IDPB where IDNV = '$IDNV'";
            $result = mysqli_query($link, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = $result->fetch_array();
                $hoten = $row["hoten"];
                $diachi = $row["diachi"];
                $tenpb = $row["tenpb"];
                $IDPB = $row["IDPB"];
            }
            ?>
        <h1>Cập nhật thông tin</h1>
        <table>
            <tr>
                <th>Mã nhân viên</th>
                <td><input type="text" readonly name="IDNV" id="IDNV" value="<?php echo $IDNV ?>"></td>
            </tr>
            <tr>
                <th>Tên nhân viên</th>
                <td><input type="text" name="hoten" id="hoten" value="<?php echo $hoten ?>"></td>
            </tr>
            <tr>
                <th>Tên phòng ban</th>
                <td><select name="phongban" id="phongban">
                    <?php
                        $link = mysqli_connect("localhost", "root", "") or die ("Can not connect to database");
                        mysqli_select_db($link, "dulieu");
                        $query = "select * from phongban";
                        $result = mysqli_query($link, $query);
                        while ($row = mysqli_fetch_assoc($result)):
                    ?>
                    <option value="<?php echo $row["IDPB"]; ?>"><?php echo $row["tenpb"]; ?></option>
                    <?php endwhile; ?>
                </select></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><input type="text" name="diachi" id="diachi" value="<?php echo $diachi ?>"></td>
            </tr>
        </table>
        <input class="submit" type="submit" value="Update" name="update">
        <input class="submit" type="button" value="Cancel" name="cancel" onclick="Cancel()">
    </form>
    <script>
        function Cancel(){
            window.history.back();
        }
        function SetCBB(){
            document.FormUpdate.phongban.value = <?php echo $IDPB ?>
        }
    </script>
</body>
</html>