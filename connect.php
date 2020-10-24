<?PHP 
    $link=mysqli_connect("localhost", "root","") or die("Could not connect to database");
    mysqli_select_db($link, "dulieu");
    $sql="select * from sinhvien";
    $result=mysqli_query($link, $sql);
    echo "<table border = '1' width = '100%'>";
    echo "<caption>Du lieu truy xuat tu bang SinhVien</caption>";
    echo '<TR>
            <TH>MASV</TH> 
            <TH>MALHP</TH>
            <TH>TENSV</TH>
            <TH>NGAYSINH</TH>
            <TH>NGHENGHIEP</TH>
            </TR>';
        while($row=mysqli_fetch_array($result)) {
            echo "<tr><td>".$row{"MaSV"}."</td><td>".$row{"MaLHP"}."</td><td>".$row{"TenSV"}."</td><td>".$row{"DOB"}."</td><td>".$row{"NgheNghiep"}."</td></tr>";
        }
        echo "</table>";
?>