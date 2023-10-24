<?php 
// Pertemuan 2 
// Pengulangan 
// for
// while
// do while

echo "Contoh penggunaan for<br>";
for( $i = 0; $i < 5; $i++ ){
    echo "Hello world ".$i."x <br>";
}

echo "Contoh penggunaan while<br>";
$u = 0;
while( $u < 5 ){
    echo "Hello world". $u . "x <br>";
$u++;
}

echo "Contoh penggunakan do while<br>";
$x = 0;
do{
    echo "Hello word". $x . "x <br>";
$x++;
}while( $x < 5);

/* Perbedaan while dengan do while yaitu ketika while bernilai false dia tidak menjalankan 1 kali
tetapi kalo do while dia menjalankan 1 kali dlu */



?>