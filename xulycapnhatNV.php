<?php
    $IDNV = $_REQUEST["IDNV"];
    $hoten = $_REQUEST["hoten"];
    $diachi = $_REQUEST["diachi"];
    $phongban = $_REQUEST["phongban"];
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "dulieu");
    $query = "update nhanvien set hoten = '$hoten', diachi = '$diachi', IDPB = '$phongban'  where IDNV = '$IDNV'";
    $result = mysqli_query($link, $query);
    header("location: xemthongtinNV.php");
?>