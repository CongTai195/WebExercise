<?php
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "dulieu");
    $query = "select * from admin WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result)==0) {
        header("Location: login.php");
    }
    else
        header("Location: http://localhost/CNWeb18N13/capnhat.php");
?>