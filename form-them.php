<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fomr Thêm</title>
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
    </style>
</head>
<body>
    <form id="form" action="http://localhost/CNWeb18N13/themnhanvien.php" method="POST" name="FormAdd" class="FormAdd">
        <h1>Thêm nhân viên</h1>
        <table>
            <tr>
                <th>Mã nhân viên</th>
                <td><input type="text" name="IDNV" id="IDNV"></td>
            </tr>
            <tr>
                <th>Họ và tên</th>
                <td><input type="text" name="tennv" id="tennv"></td>
            </tr>
            <tr>
                <th>Phòng ban</th>
                <td><select name="phongban" id="phongban">
                    <option value="1">Kế hoạch - Tổng hợp</option>
                    <option value="2">Tài chính - Kế Toán</option>
                    <option value="3">Giám đốc</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><input type="text" name="diachi" id="diachi"></td>
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