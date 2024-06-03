<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: inline-block;
            border: 3px solid #000;
            padding: 16px;
            border-radius: 24px;
        }
        h3 {
            margin: 0;
            border-bottom: 2px solid #000;
            margin-bottom: 16px;
            margin-top: 0;
            text-align: center;
        }
        input {
            margin-bottom: 12px;
        }
        button {
            font-size: 16px;
            width: 60px;
        }
    </style>
</head>
<body>
    <form>
        <h3>TÍNH TOÁN SỐ HỌC</h4>
        Số thứ 1: <input type="text" name="txtSo1"> <br>
        Số thứ 2: <input type="text" name="txtSo2"> <br>
        Kết quả: <input type="text" name="txtKetQua">
        <div role="group">
            <button>Cộng</button>
            <button>Trừ</button>
            <button>Nhân</button>
            <button>Chia</button>
            <button>Mod</button>
        </div>
    </form>
</body>
</html>