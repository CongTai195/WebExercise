<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T1</title>
    <style>
        html {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Handlee', cursive;
            background-color: pink;
            padding: 10px;
            margin: 0;
            overflow: auto;
            border-radius: 10px;
        }

        table {
            width: 100%;
            font-size: 12pt;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            table-layout: fixed;
        }

        th {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
        }

        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            table-layout: fixed;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        caption {
            font-size: 15pt;
            font-weight: bold;
        }
        .section {
            overflow: hidden;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="section">
    <form action="xemthongtinNVPB.php" method="$_GET">
    <?php
            {
                $link = mysqli_connect("localhost", "root", "") or die("Can not connect to database");
                mysqli_select_db($link, "dulieu");
                $idpb = $_REQUEST["IDPB"];
                $query = "select IDNV,hoten, tenpb, diachi from nhanvien inner join phongban on nhanvien.IDPB = phongban.IDPB where nhanvien.IDPB = '$idpb'";
                $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table>
                    <caption>Nhân viên của phòng</caption>
                    <tr>
                        <th>Mã nhân viên</th>
                        <th>Họ và tên</th>
                        <th>Phòng ban làm việc</th>
                        <th>Địa chỉ</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <th><?php echo $row["IDNV"] ?> </th>
                        <td><?php echo $row["hoten"] ?></td>
                        <td><?php echo $row["tenpb"] ?></td>
                        <td><?php echo $row["diachi"] ?></td>
                    </tr>
                <?php 
                }
                ?>
                </table>
                <?php
            }
                else
                    echo "Không tìm thấy nhân viên nào !";
                }
                    ?>
    </form>
    </div>
</body>
</html>