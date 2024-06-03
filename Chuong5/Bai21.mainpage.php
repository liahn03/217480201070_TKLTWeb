<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #aaa;
            color: #fff;
            border-radius: 12px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php
        session_start();
    ?>

    <h3>TRANG CHÍNH</h3>
    <p>Người dùng đã đăng nhập với tên <?php echo $_SESSION["username"]; ?> và Email là <?php echo $_SESSION["email"]; ?></p>
    <a href="./Bai21.login.html">Đăng xuất</a>
</body>
</html>