<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
    <style> 
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }

    </style>
</head>
<body>
    <h1>Latihan 1</h1>

    <?php
    $angka = [
        [1, 2, 3], 
        [4, 5, 6], 
        [7, 8, 9]
    ];
    ?>
    <?php foreach ($angka as $number): ?>
        <?php foreach ($number as $n): ?>
            <div class="kotak"><?= $n; ?></div>
        <?php endforeach;?>
        <div class="clear"></div>
    <?php endforeach;?>
</body>
</html>