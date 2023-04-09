<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4</title>
</head>
<body>
    <?php if (isset($_POST["submit"])): ?>
    <form action="latihan5.php" method="post">
        Masukan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit">Kirim!</button>
    </form>
    <?php endif; ?>
</body>