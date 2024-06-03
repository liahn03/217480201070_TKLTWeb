<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid #000;
            border-collapse: collapse;
            padding: 2px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include("connection.php");
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $bang = $_POST["txtDuLieu"];
            if($bang == "hanghoa") {
                echo "<h3>DANH SÁCH HÀNG HÓA</h3>";
                $sql = "select * from $bang";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0) {
                    echo "<table>
                            <tr>
                                <th>Mã hàng</th>
                                <th>Tên hàng</th>
                                <th>Mã NSX</th>
                                <th>Năm sản xuất</th>
                                <th>Giá</th>
                            </tr>";
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>{$row["MaHang"]}</td>";
                        echo "<td>{$row["TenHang"]}</td>";
                        echo "<td>{$row["MaNSX"]}</td>";
                        echo "<td>{$row["NamSX"]}</td>";
                        echo "<td>{$row["Gia"]}</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Không có dữ liệu";
                }
            } else if($bang == "khachhang") {
                echo "<h3>DANH SÁCH KHÁCH HÀNG</h3>";
                $sql = "select * from $bang";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0) {
                    echo "<table>
                            <tr>
                                <th>Mã KH</th>
                                <th>Tên KH</th>
                                <th>Năm sinh</th>
                                <th>Điện thoại</th>
                                <th>Địa chỉ</th>
                            </tr>";
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>{$row["MaKH"]}</td>";
                        echo "<td>{$row["TenKH"]}</td>";
                        echo "<td>{$row["NamSinh"]}</td>";
                        echo "<td>{$row["DienThoai"]}</td>";
                        echo "<td>{$row["DiaChi"]}</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Không có dữ liệu";
                } 
            } else if($bang == "nhasanxuat") {
                echo "<h3>DANH SÁCH NHÀ SẢN XUẤT</h3>";
                $sql = "select * from $bang";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0) {
                    echo "<table>
                            <tr>
                                <th>Mã NSX</th>
                                <th>Tên NSX</th>
                                <th>Quốc gia</th>
                            </tr>";
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>{$row["MaNSX"]}</td>";
                        echo "<td>{$row["TenNSX"]}</td>";
                        echo "<td>{$row["QuocGia"]}</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Không có dữ liệu";
                } 
            } else if($bang == "hoadon") {
                echo "<h3>DANH SÁCH HÓA ĐƠN</h3>";
                $sql = "select * from $bang";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0) {
                    echo "<table>
                            <tr>
                                <th>Mã HĐ</th>
                                <th>Mã KH</th>
                                <th>Mã hàng</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>";
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>{$row["MaHD"]}</td>";
                        echo "<td>{$row["MaKH"]}</td>";
                        echo "<td>{$row["MaHang"]}</td>";
                        echo "<td>{$row["SoLuong"]}</td>";
                        echo "<td>{$row["ThanhTien"]}</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Không có dữ liệu";
                } 
            }
            
        }
    ?>
</body>
</html>