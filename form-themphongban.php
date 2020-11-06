<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Thêm</title>
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
        .FormAdd{
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
<body>
    <form id="form" action="http://localhost/CNWeb18N13/themphongban.php" method="POST" name="FormAdd" class="FormAdd">
        <h1>Thêm phòng ban</h1>
        <table>
            <tr>
                <th>Mã phòng ban</th>
                <td><input type="text" required name="IDPB" id="IDPB"></td>
            </tr>
            <tr>
                <th>Tên phòng ban</th>
                <td><input type="text" required name="tenpb" id="tenpb"></td>
            </tr>
            <tr>
                <th>Mô tả</th>
                <td><input type="text" name="mota" id="mota">
                </td>
            </tr>
        </table>
        <input class="submit" type="submit" value="Add" name="update">
        <input class="submit" type="button" value="Cancel" name="cancel" onclick="Cancel()">
    </form>
    <script>
        function Cancel(){
            window.history.back();
        }
    </script>
</body>
</html>