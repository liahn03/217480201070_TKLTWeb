<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhập mảng (cách nhau , ): <input type="text" name="txtMang">
        <button type="submit">Xử lý</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Mảng vừa nhập: " . $_POST["txtMang"];
            $arr = explode(", ", $_POST["txtMang"]);
            $demchan = 0;
            for($i = 0; $i < count($arr); $i++) {
                if($arr[$i] % 2 == 0)
                    $demchan++;
            }
            echo "<br>Số các số chẵn: $demchan";

            $tongle = 0;
            for($i = 0; $i < count($arr); $i++) {
                if($arr[$i] % 2 != 0)
                    $tongle += $arr[$i];
            }
            echo "<br>Tổng các số lẻ: $tongle";

            $max = $arr[0];
            $min = $arr[0];
            for($i = 1; $i < count($arr); $i++) {
                if($arr[$i] > $max)
                    $max = $arr[$i];
                if($arr[$i] < $min)
                    $min = $arr[$i];
            }
            echo "<br>Số lớn nhất: $max";
            echo "<br>Số nhỏ nhất: $min";

            echo "<br>Đảo ngược mảng: ";
            for($i = count($arr) - 1; $i >= 0; $i--) {
                echo $arr[$i] . " ";
            }
        }
    ?>
</body>
</html>