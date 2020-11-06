<?php
    $idpb = $_POST['IDPB'];
    $tenpb = $_POST['tenpb'];
    $mota = $_POST['mota'];
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "dulieu");
    $query = "insert into phongban values ('$idpb', '$tenpb', '$mota')";
    mysqli_query($link, $query);
    header("Location: xemthongtinpb.php"); 
?>