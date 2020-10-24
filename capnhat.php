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
        a{
            text-decoration: none;
            color: black;
            text-align: center;
            font-weight: lighter;
            font-size: 20px;
            padding: 0 0px;
        }
        a::after{
            content: '';
            display: flex;
            width: 0;
            height: 2px;
            background: black;
            transition: width .3s;
        }
        a:hover::after{
            width: 100%;
            transition: width .3s;
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
    </form>
    <div class="section">
        <form action="" name="formHeader">
            <?php
            $link = mysqli_connect("localhost", "root", "") or die("Can not connect to database");
            mysqli_select_db($link, "dulieu");
            $query = "select * from phongban";
            $result = mysqli_query($link, $query);
            echo "<table border = '2px' width = '100%'>";
            echo "<caption>Các phòng ban trong công ty</caption>";
            echo "<tr>
            <th>Mã phòng ban</th>
            <th>Tên phòng</th>
            <th>Mô tả</th>
            <th>Thao tác</th>
        </tr>";
            while ($row = mysqli_fetch_array($result)) {
                $IDPB = $row["IDPB"];
                echo "<tr><th>" . $row["IDPB"] . "</th><td>"
                    . $row["tenpb"] . "</td><td>"
                    . $row["Mota"] . "</td><th>" . "<a href = 'xemthongtinNVPB.php?IDPB=$row[IDPB]'>Xem nhân viên</a>" . " " . " " . "<a href = 'form-capnhat.php?IDPB=$row[IDPB]'>Cập nhật</a>" . "</th></tr>";
            }
            echo "</table>";
            ?>
    </div>
    </form>
</body>

</html>