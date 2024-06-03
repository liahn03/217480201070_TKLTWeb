<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border-collapse: collapse;
            border: 1px solid #000;
            text-align: center;
        }
        th, td {
            width: 60px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Số n</th>
                <th>Số n <sup>2</sup></th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i = 0; $i <= 50; $i++) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>" . ($i * $i) . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>