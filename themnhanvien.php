<?php
    $idnv = $_POST['IDNV'];
    $hoten = $_POST['tennv'];
    $phongban = $_POST['phongban'];
    $diachi = $_POST['diachi'];
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "dulieu");
    $query = "insert into nhanvien values ('$idnv', '$hoten', '$phongban', '$diachi')";
    mysqli_query($link, $query);
    header("Location: xemthongtinNV.php"); 
?>