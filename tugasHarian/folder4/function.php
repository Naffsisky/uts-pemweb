<?php
function salam($waktu = "Datang", $nama = "User") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1> <?= salam("Pagi", "BOSS"); ?> </h1>
    <h2> <?= salam(); ?> </h2>
</body>
</html>