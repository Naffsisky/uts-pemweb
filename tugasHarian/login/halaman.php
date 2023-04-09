<?php
require 'functions.php';
$signup = query ("SELECT * FROM signup");
?>
<!DOCTYPE html>
<html> 
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Data User</h1>
        <a href="index.php">Kembali</a>
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0" align="center">
            <tr>
                <th style="text-align:center">No</th>
                <th style="text-align:center">Nama</th>
                <th style="text-align:center">Email</th>
                <th style="text-align:center">Password</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($signup as $row): ?>
                <tr>
                    <td style="text-align:center"><?= $i; ?></td>
                    <td style="text-align:center"><?= $row["nama"]?></td>
                    <td style="text-align:center"><?= $row["email"]?></td>
                    <td style="text-align:center"><?= $row["password"]?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </body>
</html>  