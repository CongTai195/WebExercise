<?php
    // $so = 0;
    // switch ($so) {
    //     case 1: echo "số một","<br>";break;
    //     case 2: echo "số hai","<br>";break;
    //     case 3: echo "số ba","<br>";break;
    //     default: echo "Khác";
    // // }
    // $i = 1;
    // while ($i <= 10) {
    //     echo $i,"<br>";
    //     $i++;
    // }
    // $i = 0;
    // do {
    //     $i++;
    //     echo $i,"<br>";
    // } while ($i <= 10)
                //3 thành phần trong ngoặc đơn của cấu trúc vòng for là tùy chọn. Nếu kh có biểu thức kiểm tra btkt thì luôn được xem là đúng
                //3 thành phần trong ngoặc đơn không liên quan gì tới nhau thì câu lệnh vẫn hợp lệ
    $P = 1;
    $i = 0;
    while (true) {
        $i ++;
        if ($i > 10) break;
        if ($i % 2 != 0) continue;
        $P = $P * $i;
        echo $i."!! = ".$P,"<br>";
    }
    
?>