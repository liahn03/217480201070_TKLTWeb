<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhập màu (cách nhau , ): <input type="text" name="txtMang">
        <button type="submit">Xử lý</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr = explode(", ", $_POST["txtMang"]);
            for($i = 0; $i < count($arr); $i++) {
                echo '<p style="color: ' . $arr[$i] . ';">' . $arr[$i] . "</p>";
            }
        }
    ?>
</body>
</html>