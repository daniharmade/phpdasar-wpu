<?php
// Array : sebuah variabel yang bisa menampung bnyk nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
$hari = ["Senin", "Selasa", "Rabu"];
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"];
$arr1 = ["Nama", 123, false];


// Menampilkan Array menggunakan : var_dump(), print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan salah satu dari Array bisa pake echo
// echo $hari[0];
// echo "<br>";
// echo $bulan[3];

// Menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
