<?php 

$nilai = [7, 8, 2, 0, 200, 567];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beng-beng</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background: purple;
            text-align: center;
            line-height: 50px;
            color: #fff;
            float: left;
            margin: 5px;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($nilai); $i++) : ?>
        <div class="kotak"><?= $nilai[$i]; ?></div>
        <?php endfor; ?>

        <div class="clear"></div>

        <?php foreach($nilai as $data) : ?>
            <div class="kotak"><?= $data; ?></div>
            <?php endforeach; ?>
</body>
</html>