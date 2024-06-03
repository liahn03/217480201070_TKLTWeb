<?php
    include("connection.php");

    $mahang = "";
    $tenhang = "";
    $mansx = "";
    $nam = 0;
    $gia = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMa"]))
            $mahang = $_POST["txtMa"];

        if(isset($_POST["txtTen"]))
            $tenhang = $_POST["txtTen"];

        if(isset($_POST["txtMaNSX"]))
            $mansx = $_POST["txtMaNSX"];

        if(isset($_POST["txtNam"]))
            $nam = $_POST["txtNam"];

        if(isset($_POST["txtGia"]))
            $gia = $_POST["txtGia"];

        
        $sql = "insert into hanghoa values('$mahang', '$tenhang', '$mansx', '$nam', '$gia')";
        if(mysqli_query($conn, $sql)) {
            echo "Thêm dữ liệu thành công";
        } else {
            echo "haha";
            echo "Error:" .$sql . "<br>" . mysql_error($conn);
        }
    }
?>