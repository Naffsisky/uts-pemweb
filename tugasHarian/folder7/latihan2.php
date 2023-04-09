<?php

// .php?nama=Prinafsika&npm=21081010278
// $_GET ["nama"] = "Prinafsika";
// $_GET ["npm"] = "21081010278";

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
    <ul>
    <?php foreach ($mahasiswa as $mhs): ?>
        <li>
            <a href="latihan3.php?nama=<?=$mhs["nama"];?> &npm=<?=$mhs["npm"];?> &jurusan=<?=$mhs["jurusan"];?> &email=<?=$mhs["email"];?> &gambar=<?=$mhs["gambar"];?>"> <?=$mhs["nama"];?> </a>
        </li>
    <?php endforeach; ?>
        </ul>
</body>
</html>