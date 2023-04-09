<?php
// Array
// Variable yang dapat memiliki banyak nilai

// $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
// $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$arr1 = [123, "tulisan", true];
var_dump($arr1);

// Menampilkan Array
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada Array
// echo $arr1[2];

echo "<br>";
$arr1[] = "tambahan1";
$arr1[] = "tambahan2";
var_dump($arr1);

?>