<?php
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "dulieu");
    $query = "select * from sinhvien";
    $result = mysqli_query($link, $query);
    $studentlist = array();
    array_pop($studentlist);
    while ($row = mysqli_fetch_array($result)){
        echo ($row['id'].$row['name'].$row['age'].$row['university']);
    }
?>