<?php
    $IDNV = $_REQUEST["IDNV"];
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "dulieu");
    $query = "delete from nhanvien where IDNV = '$IDNV'";
    $result = mysqli_query($link, $query);
    header("location: xemthongtinNV.php");
?>