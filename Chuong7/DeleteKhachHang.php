<?php
    include("connection.php");

    $makh = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaKH"]))
            $makh = $_POST["txtMaKH"];
        
        $sql = "delete from khachhang where makh = '$makh'";
        if(mysqli_query($conn, $sql)) {
            echo "Xóa dữ liệu thành công";
        } else {
            echo "Error:" .$sql . "<br>" . mysql_error($conn);
        }
    }
?>