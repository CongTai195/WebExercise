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

        caption {
            font-size: 15pt;
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: black;
            text-align: center;
            font-weight: lighter;
            font-size: 20px;
            padding: 0 0px;
        }

        a::after {
            content: '';
            display: flex;
            width: 0;
            height: 2px;
            background: black;
            transition: width .3s;
        }

        a:hover::after {
            width: 100%;
            transition: width .3s;
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
    <form action="" name="formHeader">
        <div class="section">
            <?php
            $link = mysqli_connect("localhost", "root", "") or die("Can not connect to database");
            mysqli_select_db($link, "dulieu");
            $query = "select * from phongban";
            $result = mysqli_query($link, $query);
            ?>
            <table>
            <caption>Các phòng ban trong công ty</caption>
            <tr>
                <th>Mã phòng ban</th>
                <th>Tên phòng</th>
                <th>Mô tả</th>
                <th>Xem nhân viên</th>
            </tr>
            <?php 
            while ($row = mysqli_fetch_array($result)) {
                $IDPB = $row["IDPB"];
                ?>
            <tr>
                <th><?php echo $row["IDPB"]; ?></th>
                <td><?php echo $row["tenpb"]; ?></td>
                <td><?php echo $row["Mota"]; ?></td>
                <th><a href = "xemthongtinNVPB_GUEST.php?IDPB= <?php echo $IDPB ?>">Xem</a>
            </tr>
            <?php }?>
            </table>
        </div>
    </form>
</body>

</html>