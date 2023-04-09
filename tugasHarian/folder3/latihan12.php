<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: greenyellow;
        }
    </style>
</head>
<body>
<table border="5" cellpadding="20" cellspacing="10">
    <?php
        for ($i = 0; $i < 5; $i++){
            echo "<tr>";
            for ($j = 0; $j < 5; $j++){
                echo "<td>$i, $j</td>";
            }
            echo "</tr>";
        }
    ?>
    <?php for ($k = 0; $k < 5; $k++) : ?>
        <?php if($k % 2 == 0) : ?>
            <tr class="warna-baris">
        <?php else: ?>
            <tr>
        <?php endif; ?>
            <?php for ($l = 0; $l < 5; $l++){?>
                <td><?= "$k, $l"; ?></td>
            <?php } ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>