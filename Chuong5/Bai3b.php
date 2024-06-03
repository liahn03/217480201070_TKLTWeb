<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = rand();
        $y = rand();
        echo "x = $x, y = $y <br>";
        echo "Tổng = " . ($x + $y) . "<br>";
        echo "Hiệu = " . ($x - $y) . "<br>";
        echo "Tích = " . ($x * $y) . "<br>";
        if($y != 0) {
            echo "Thương = " . ($x / $y) . "<br>";
            echo "Dư = " . ($x % $y) . "<br>";
        } else {
            echo "Không thể thực hiện phép chia vì y = 0";
        }
        
    ?>
</body>
</html>