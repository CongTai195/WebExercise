<?php
    $IDNV = $_REQUEST["IDNV"];
    $hoten = $_REQUEST["hoten"];
    $diachi = $_REQUEST["diachi"];
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "dulieu");
    $query = "update nhanvien set hoten = '$hoten', diachi = '$diachi'  where IDNV = '$IDNV'";
    $result = mysqli_query($link, $query);
    $_SESSION['message'] = "Cập nhật thành công !";
    header("location: xemthongtinNV.php");
?>