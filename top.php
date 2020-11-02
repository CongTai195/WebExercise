<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T1</title>
    <style>
        body{
            font-family: 'Handlee', cursive;
            background-color:pink;
            padding-right: 0;
        }
        h1{
            padding-top: 0px;
            padding-left: 0;
            text-align: left;
            font-weight: bold; 
            font-size:50px;
            color: black;
        }
        a {
            text-decoration: none;
            color: black;
            text-align: right;
            font-weight: bold;
            font-size: 20px;
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
        .top-right-corner{
            width: fit-content;
            background-color: pink;
            position: absolute;
            top: 20px;
            right: 100px;
        }
        .main-corner{
            background-color: pink;
            width:fit-content;
            position: absolute;
            top: 0;
        }
    </style>
</head>
<body>
    <div class="main-corner">
        <h1>Chào mừng các bạn đến với trang web của mình</h1>
    </div>
    <div class="top-right-corner">
        <a href="http://localhost/CNWeb18N13/login.php" target="_top"><h4>Đăng nhập</h4></a>
    </div>
</body>
</html>