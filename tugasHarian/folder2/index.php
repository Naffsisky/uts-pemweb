
<?php
echo "Prinafsika";
?>

<?php
$nama = "Prinafsika";
$nama_depan = "Prinaf";
$nama_belakang = "sika";
$umur = 19;
$umur += 1;
$x = 19;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1> Halo, Selamat datang <?php echo $nama; ?> </h1>
    <p><?php echo "Ini adalah baris!" ?></p>
    <?php
        echo "<h1>Ini adalah baris kedua</h1>";
        echo "Nama saya : " . $nama_depan . " " . $nama_belakang;
        echo "<br>";
        echo "Umur saya : " . $umur;
        echo "<br>";
        var_dump(1>5);
        echo "<br>";
        var_dump ($x < 20 || $x % 2 == 0);
    ?>
</body>
</html>

