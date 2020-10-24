<?php
    if (isset($_REQUEST["cancel"])){
        header("location: capnhat.php");
    }
    $IDPB = $_REQUEST["IDPB"];
    $namepb = $_REQUEST["tenpb"];
    $description = $_REQUEST["motapb"];
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "dulieu");
    if (empty($namepb) || empty($description)){
        header("location: form-capnhat.php?IDPB=$IDPB");
    }
    else {
        $query = "update phongban set tenpb = '$namepb', Mota = '$description'  where IDPB = '$IDPB'";
        $result = mysqli_query($link, $query);
        $_SESSION['message'] = "Cập nhật thành công !";
        header("location: capnhat.php");
    }
    
?>