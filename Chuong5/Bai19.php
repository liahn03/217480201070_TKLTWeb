<?php
    echo "Chào bạn, <br>";
    if(isset($_COOKIE["ThoiGianTruyCap"])) {
        echo "Thời gian truy cập gần đây nhất là: " . date("d/m/y:i:s", $_COOKIE["ThoiGianTruyCap"]);
        setcookie("ThoiGianTruyCap", time(), time() + 600);
    } else {
        setcookie("ThoiGianTruyCap", time(), time() + 600);
    }
?>