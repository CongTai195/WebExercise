<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        html{
            margin: 0;
            padding: 0;
        }
        .formleft{
            width: 120px;
        }
        body{
            font-family: 'Handlee', cursive;
            background-color: pink;
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
            display: block;
            width: 0;
            height: 2px;
            background: black;
            transition: width .2s;
        }
        a:hover::after{
            width: 100%;
            transition: width .2s;
        }
    </style>
</head>
<body>
    <form action="" method="" name="formleft" class="formleft">
        <a href="main.php" target="main"><h4>Trang chủ</h4></a>
        <a href="http://localhost/CNWeb18N13/xemthongtinNV.php" target="main"><h4>Nhân viên</h4></a>
        <a href="http://localhost/CNWeb18N13/xemthongtinPB.php#" target="main"><h4>Phòng ban</h4></a>
        <a href="http://localhost/CNWeb18N13/login.php" target="main"><h4>Mục 3</h4></a>
        <a href="http://localhost/CNWeb18N13/form-capnhat.php" target="main"><h4>Mục 4</h4></a>
        <a href="form55.html" target="main"><h4>Mục 5</h4></a>
    </form>
</body>
</html>