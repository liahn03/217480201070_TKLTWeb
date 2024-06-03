<?php
    if(isset($_COOKIE["TenKH"]) && $_COOKIE["SDT"]) {
        echo "Tên khách hàng: " . $_COOKIE["TenKH"] . "<br>";
        echo "Số điện thoại: " . $_COOKIE["SDT"];
    } else {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            setcookie("TenKH", $_POST["txtTen"], time() + 10);
            setcookie("SDT", $_POST["txtSDT"], time() + 10);
        }
    }
?>