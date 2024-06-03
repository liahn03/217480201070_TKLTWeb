<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            display: inline-block;
            border: 3px solid #000;
            padding: 16px;
            border-radius: 24px;
        }
        h3 {
            margin: 0;
            border-bottom: 2px solid #000;
            margin-bottom: 16px;
            margin-top: 0;
            text-align: center;
        }
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
        $username = "root";
        $email = "root@gmail.com";
        $password = "123456";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if($username == $_POST["txtUsername"] && $email == $_POST["txtEmail"] && $password == $_POST["txtPassword"]) {
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
                echo '<div>
                    <h3>TRANG XỬ LÍ THÔNG TIN ĐĂNG NHẬP</h4>
                    <p>Thông tin đăng nhập hợp lệ</p>
                    <a href="./Bai21.mainpage.php">Trang chính</a>
                </div>';
            } else {
                echo "Thông tin đăng nhập không chính xác";
            }
        }
    ?>
</body>
</html>