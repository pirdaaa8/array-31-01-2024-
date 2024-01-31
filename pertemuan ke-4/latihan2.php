<?php 

$abjad= ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$mapel = ["Pendidikan Agama dan budi Pekerti", "Pendidikan Pancasila", "Bahasa Indonesia", "Matematika", "Bahasa Inggris", "Dasar2 Kejuruan RPL"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas | virdaaa</title>
    <style>
        .bulet{
            width: 150px;
            height: 150px;
            background: red;
            text-align: center;
            line-height: 150px;
            color: #fff;
            border-radius: 50%;
            float: left;
            margin: 5px;
        }

        .clear{
            clear: both;
        }
        .kotak{
            width: 350px;
            height: 200px;
            background: orange;
            text-align: center;
            line-height: 200px;
            color: #fff;
            float: left;
            margin: 5px;
            border-radius: 10px;
            border-top-left-radius: 70px;
            border-bottom-left-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Abjad A - Z</h1>
    <?php for($i = 0; $i < count($abjad); $i++) : ?>
        <div class="bulet"><?= $abjad[$i]; ?></div>
        <?php endfor; ?>

        <div class="clear"></div>

    <h1>Mapel RPL 2 </h1>
        <?php foreach($mapel as $data) : ?>
            <div class="kotak"><?= $data; ?></div>
            <?php endforeach; ?>
</body>
</html>