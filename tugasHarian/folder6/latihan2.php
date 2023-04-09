<?php
// $mahasiswa = [
//     ["Prinafsika", "21081010278", "Teknik Informatika", "prinafsika007@gmail.com"],
//     ["Rena Rama Rosalinda", "21081010190", "Teknik Informatika", "renaramarosalinda@gmail.com"],
//     ["Wanda Gustrifa", "21081010000", "Teknik Informatika", "wanda@gmail.com"]
// ];

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Prinafsika", 
    "npm" => "21081010278", 
    "email" => "prinafsika007@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "prinaf.jpg",
    ],
    [
        "nama" => "Rena Rama Rosalinda", 
        "npm" => "21081010190", 
        "email" => "renaramarosalinda@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rena.jpg",
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>
