<?php
if( !isset($_GET["nama"]) || !isset ($_GET["npm"]) || !isset ($_GET["jurusan"]) || !isset ($_GET["email"]) || !isset ($_GET["gambar"]) ){
    header ("Location: latihan2.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 3</title>
    </head>
    <body>
        <h1> Detail Mahasiswa : </h1>
        <ul>
            <li><img src="<?= $_GET["gambar"]?>"> </li>
            <li><?= $_GET["nama"];?></li>
            <li><?= $_GET["npm"];?></li>
            <li><?= $_GET["email"];?></li>
            <li><?= $_GET["jurusan"];?></li>


            </li>
        </ul>
        <a href="latihan2.php" > Kembali ke daftar mahasiswa </a>
    </body>
</html>