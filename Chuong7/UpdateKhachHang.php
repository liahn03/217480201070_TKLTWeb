<?php
    include("connection.php");

    $makh = "";
    $tenkh = "";
    $namsinh = "";
    $dienthoai = 0;
    $diachi = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaKH"]))
            $makh = $_POST["txtMaKH"];

        if(isset($_POST["txtTenKH"]))
            $tenkh = $_POST["txtTenKH"];

        if(isset($_POST["txtNamSinh"]))
            $namsinh = $_POST["txtNamSinh"];

        if(isset($_POST["txtDienThoai"]))
            $dienthoai = $_POST["txtDienThoai"];

        if(isset($_POST["txtDiaChi"]))
            $diachi = $_POST["txtDiaChi"];

        
        $sql = "update khachhang set tenkh = '$tenkh', namsinh = '$namsinh', dienthoai = '$dienthoai', diachi = '$diachi' where makh = '$makh'";
        if(mysqli_query($conn, $sql)) {
            echo "Cập nhật dữ liệu thành công";
        } else {
            echo "haha";
            echo "Error:" .$sql . "<br>" . mysql_error($conn);
        }
    }
?>