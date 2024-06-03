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
            width: 8 0px;
        }
    </style>
</head>
<body>
    <form>
        <h3>TÍNH USCLN VÀ BSCNN</h4>
        Số thứ 1: <input type="text" name="txtSo1"> <br>
        Số thứ 2: <input type="text" name="txtSo2"> <br>
        Kết quả: <input type="text" name="txtKetQua">
        <div role="group">
            <button type="button" onclick="USCLN()">USCLN</button>
            <button type="button" onclick="BSCNN()">BSCNN</button>
        </div>
    </form>

    <script>
        function gcd(a, b) { 
            while (b != 0) {
                let temp = b;
                b = a % b;
                a = temp;
            }
            
            return a;
        }

        function lcm(a, b) {
            return (a * b) / gcd(a, b);
        }

        function USCLN() {
            var num1 = document.getElementsByName("txtSo1")[0].value
            var num2 = document.getElementsByName("txtSo2")[0].value
            document.getElementsByName("txtKetQua")[0].value = gcd(num1, num2)
        }

        function BSCNN() {
            var num1 = document.getElementsByName("txtSo1")[0].value
            var num2 = document.getElementsByName("txtSo2")[0].value
            document.getElementsByName("txtKetQua")[0].value = lcm(num1, num2)
        }

    </script>
</body>
</html>