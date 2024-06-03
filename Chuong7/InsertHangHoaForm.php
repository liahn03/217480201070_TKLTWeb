<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="InsertHangHoa.php" method="post">
        Mã hàng <input type="text" name="txtMa"> <br>
        Tên hàng <input type="text" name="txtTen"> <br>

        Mã nhà sản xuất
        <select name="txtMaNSX" id="">
            <?php
                include("connection.php");

                $sql = "select mansx, tennsx from nhasanxuat";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row["mansx"] . '">' . $row["tennsx"] . '</option>';
                    }
                }
            ?>
        </select>
        <br>

        Năm sản xuất <input type="text" name="txtNam"> <br>
        Giá <input type="text" name="txtGia">
        <button type="submit">Thêm</button>
    </form>
</body>
</html>