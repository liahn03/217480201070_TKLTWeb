<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <style>
        .col {
            height: 74px;
        }
        .container {
            border: 4px solid #000;
            width: 600px
        }
    </style>
</head>
<body>
    <?php
        echo '<div class="container">';
        for($row = 1; $row <= 8; $row++) {
            echo '<div class="row">';
            for($col = 1; $col <= 8; $col++) {
                if(($row % 2 == 0 && $col % 2 == 0) ||  ($row % 2 != 0 && $col % 2 != 0)) {
                    echo '<div style="background-color: black;" class="col"></div>';
                } else {
                    echo '<div class="col"></div>';
                }
            }   
            echo '</div>';
        }
        echo '</div>';
    ?>
</body>
</html>