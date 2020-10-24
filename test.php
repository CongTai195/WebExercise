<?php
    $link = mysqli_connect("localhost", "root","");
    mysqli_select_db($link,"dulieu");
    $result = mysqli_query($link, "select * from SinhVien");
    while ($row = mysqli_fetch_array($result)){
        echo $row{"MaSV"};
    }
?>