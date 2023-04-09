<?php
$conn = mysqli_connect("localhost", "root", "", "wpu");
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

if (!$result){
    echo mysqli_error($conn);
}
// $mhs = mysqli_fetch_row($result);
// while ($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs["nama"]);
// };
// $mhs_array = mysqli_fetch_array($result);
// $mhs_object = mysqli_fetch_object($result);
// var_dump($mhs);
// echo "<br>";
// var_dump($mhs[2]); // numerik
// echo "<br>";
// var_dump($mhs["nama"]); // associative
// echo "<br>";
// var_dump($mhs_array["nama"]); // numerik dan associative (fleksibel)
// echo "<br>";
// var_dump($mhs_object->nama); // object

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $i = 1; ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a> | <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]?>" width="70" height="70"></td>
                <td><?= $row["npm"]?></td>
                <td><?= $row["nama"]?></td>
                <td><?= $row["email"]?></td>
                <td><?= $row["jurusan"]?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </body>
</html>