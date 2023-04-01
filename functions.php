<?php
$conn = mysqli_connect("localhost", "root", "", "pentest");

if (!$result){
    echo mysqli_error($conn);
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $produk = htmlspecialchars($data["produk"]);
    $wa = htmlspecialchars($data["wa"]);
    $day = date("l");
    $date = date("d/m/Y");

    $query = "INSERT INTO pesanan VALUES (NULL, '$username', '$nama', '$day', '$date', '$produk', '$email', '$wa')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>