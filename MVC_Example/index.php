<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .vertical-menu {
      width: 100%;
    }

    .vertical-menu a {
      background-color: #eee;
      color: black;
      display: block;
      padding: 12px;
      text-decoration: none;
    }

    .vertical-menu a:hover {
      background-color: #ccc;
    }

    .vertical-menu h2.active {
      font-size: 50px;
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>

<body>
  <div class="vertical-menu">
    <h2 class="active">Trang chủ</h2>
    <p><a href="http://localhost/CNWeb18N13/MVC_Example/Controller/C_Student.php?display">Xem thông tin sinh viên</a></p>
    <p><a href="http://localhost/CNWeb18N13/MVC_Example/Controller/C_Student.php?FormAdd">Thêm sinh viên</a></p>
    <p><a href="http://localhost/CNWeb18N13/MVC_Example/Controller/C_Student.php?del">Xóa sinh viên</a></p>
    <p><a href="http://localhost/CNWeb18N13/MVC_Example/Controller/C_Student.php?FormUpdate">Cập nhật sinh viên</a></p>
  </div>

</body>

</html>