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
        <button type="submit">Xử lý</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Chuỗi đảo ngược: " . strrev($_POST["txtChuoi"]);
        }
    ?>
</body>
</html>