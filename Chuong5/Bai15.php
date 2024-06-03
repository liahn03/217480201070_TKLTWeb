<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập chuỗi: <input type="text" name="txtChuoi"> <br>
        Nhập ký tự: <input type="text" name="txtKyTu">
        <button type="submit">Xử lý</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $count = substr_count($_POST["txtChuoi"], $_POST["txtKyTu"]);
            echo "Số ký tự " . $_POST["txtKyTu"] . " trong chuỗi " . $_POST["txtChuoi"] . " là: " . $count;
        }
    ?>
</body>
</html>