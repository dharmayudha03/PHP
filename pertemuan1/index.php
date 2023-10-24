<?php 
// Pertemuan 1 
// Belajar sytax dasar PHP

// ini adalah komentar satu baris
/* ini adalah komentar yang lebih dari satu baris*/

// Output PHP
// echo, print
// print_r
// var_dump

echo "ini contoh output menggunakan echo<br>";
print "ini contoh output menggunakan print<br>";
print_r("ini contoh output menggunakan print<br>");
var_dump('ini contoh output menggunakan var_dump<br>');

// Belajar variable 
// variable adalah sebuah tempat untuk menampung nilai
// untuk membuat variable anda harus menggunakan $ diawal 

$nama = "Mochamad Dharma Yudha Thio Pratama";

echo "Selamat datang, $nama <br>";

// penulisan php bisa berada di dalam HTML begitu sebaliknya HTML bisa berada di dalam PHP

// Operator Aritmatika
// -, +, *, /
$a = 10;
$b = 15;

echo "Hasil dari ". $a . " + ". $b . " adalah ". ($a + $b); //ini adalah contoh interpolasi



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $nama; ?></h1>
</body>
</html>