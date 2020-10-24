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
        .FormLogin{
            color: black;
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-100%);
        }
        .submit{
            background-color: #3fb6b2;
            padding: 12px 45px;
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
    </style>
    <script defer>
        function ButtonOK(){
            const name = document.getElementById('username');
            const pass = document.getElementById('pass');
            if (name.value === '' || name.value == null) {
                alert("Bạn chưa nhập Username")
            } else if (pass.value === '' || pass.value == null ){
                alert("Bạn chưa nhập Password")
            }
        }
    </script>
</head>
<body>
    <form id="form" action="http://localhost/CNWeb18N13/xulylogin.php" method="POST" name="FormLogin" class="FormLogin">
        <h1>Login</h1>
        <table>
            <tr>
                <th>User</th>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password" id="pass"></td>
            </tr>
        </table>
        <input class="submit" type="submit" value="OK" name="OK">
        <input class="submit" type="button" value="Reset" name="reset" onclick="ButtonReset()">
    </form>
</body>
</html>