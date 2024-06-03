<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập màu (cách nhau , ): <input type="text" name="txtMang" value="<?php if(isset($_POST['txtMang'])) echo $_POST['txtMang'];?>"> <br>
        Chọn công việc:
        <select name="txtCongViec">
            <option selected disabled hidden>Chọn</option>
            <option value="SoLonNhat">Tìm số lớn nhất</option>
            <option value="SoNhoNhat">Tìm số nhỏ nhất</option>
            <option value="SoChan">In các số chẵn</option>
            <option value="SoLe">In các số lẻ</option>
            <option value="SapXep">Sắp xếp tăng dần</option>
        </select>
        <button type="submit">Xử lý</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr = explode(", ", $_REQUEST["txtMang"]);
            if($_POST["txtCongViec"] == "SoLonNhat") {
                TimSoLonNhat($arr);
            } else if($_POST["txtCongViec"] == "SoNhoNhat") {
                TimSoNhoNhat($arr);
            } else if($_POST["txtCongViec"] == "SoChan") {
                InSoChan($arr);
            } else if($_POST["txtCongViec"] == "SoLe") {
                InSoLe($arr);
            } else if($_POST["txtCongViec"] == "SapXep") {
                SapXep($arr);
            }
        }

        function TimSoLonNhat($arr) {
            // echo "<script>alert('Số lớn nhất là " . max($arr) . "')" . "</script>";
            echo "Số lớn nhất: " . max($arr);
        }

        function TimSoNhoNhat($arr) {
            // echo "<script>alert('Số nhỏ nhất là " . min($arr) . "')" . "</script>";
            echo "Số nhỏ nhất: " . min($arr);
        }

        function InSoChan($arr) {
            $result = "";
            foreach ($arr as $num) {
                if ($num % 2 == 0) {
                    $result = $result . $num . " ";
                }
            }
            echo "Các số chẵn: " . $result;
        }

        function InSoLe($arr) {
            $result = "";
            foreach ($arr as $num) {
                if ($num % 2 != 0) {
                    $result = $result . $num . " ";
                }
            }
            echo "Các số lẻ: " . $result;
        }

        function SapXep($arr) {
            sort($arr);
            echo "Sắp xếp mảng tăng dần: " . implode(", ", $arr);
        }
    ?>
</body>
</html>