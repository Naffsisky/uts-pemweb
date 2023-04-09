<?php
$mahasiswa = [
    ["Prinafsika", "21081010278", "Teknik Informatika", "prinafsika@gmail.com"],
    ["Rena Rama Rosalinda", "21081010190", "Teknik Informatika", "renaramarosalinda@gmail.com"],
    ["Wanda", "21081010000", "Teknik Informatika", "Wanda@gmail.com"]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NPM : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>