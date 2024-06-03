<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hoten = $_POST["txtHoTen"];
        $ngaysinh = $_POST["txtNgaySinh"];
        $lop = $_POST["txtLop"];
        $diem = $_POST["txtDiem"];
    ?>

    <p>Họ và tên: <?php echo $hoten ?></p>
    <p>Ngày sinh: <?php echo $ngaysinh ?></p>
    <p>Lớp: <?php echo $lop ?></p>
    <p>Điểm: <?php echo $diem ?></p>
</body>
</html>