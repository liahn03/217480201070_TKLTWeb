<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>
        <?php
            for($i = 1900; $i <= date("Y"); $i++) {
                echo "<option>$i</option>";
            }
        ?>
    </select>
    
</body>
</html>