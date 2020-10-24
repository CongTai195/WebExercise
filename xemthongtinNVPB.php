<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T1</title>
    <style>
        html{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Handlee', cursive;
            background-color:pink;
            padding: 10px;
            margin: 0;
            overflow: auto;
            border-radius: 10px;
        }
        table{
            width: 100%;
            font-size: 12pt;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            table-layout: fixed;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
        }
        td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            table-layout: fixed;
        }
        caption{
            font-size: 15pt;
            font-weight: bold;
        }
        .section{
            overflow: hidden;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="" name="formHeader">
    <div class="section">
    <?php
    $link = mysqli_connect("localhost", "root", "") or die ("Can not connect to database");
    mysqli_select_db($link, "dulieu");
    $idpb = $_GET["IDPB"];
    $query = "select hoten, tenpb, diachi from nhanvien inner join phongban on nhanvien.IDPB = phongban.IDPB where nhanvien.IDPB = '$idpb'";
    $result = mysqli_query($link, $query);
    echo "<table border = '2px' width = '100%'>";
    // $r = $result->fetch_array();
    // $tenphong = $r["tenpb"];
    // $string = "Nhân viên của phòng ".$tenphong;
    //echo "<caption>$string</caption>";
    echo "<tr>
            <th>Họ và tên</th>
            <th>Phòng ban làm việc</th>
            <th>Địa chỉ</th>
        </tr>";
        while ($row = mysqli_fetch_array($result)){
            echo "<tr><td>".$row["hoten"]."</td><td>".$row["tenpb"]."</td><td>".$row["diachi"]."</td></tr>";
        }
    echo "</table>";
    ?>
    </div>
    </form>
</body>
</html>