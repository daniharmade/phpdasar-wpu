<?php
    //BELAJAR PEHAPE BROW
    
    // echo "Menggunakan echo <br>"; 
    // print "Menggunakan print <br> ";
    // print_r("Menggunakan print_r <br> ");
    // var_dump("Menggunakan var_dump")

    // $nama = "Harmde";
    // $paragraf = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, exercitationem?"

    $nama = "Dani Harmade";
    $nim = 12250310356;

    //Menggabungkan beberapa variabel menggunakan titik (.)
    echo "Nama : " . $nama . "<br>";
    echo "NIM : " . $nim. "<br><br>" ;

    //Kel Persegi Panjang & Luas
    $panjang = 5;
    $lebar = 10;
    $luaspersegi = $panjang * $lebar;
    $kelpersegi = 2 * ($panjang + $lebar);
    // $phi = 3.14;
    $r = 10;
    $luaslingkaran = pi() * $r * $r;
    $kelLingkaran = 2 * pi() * $r;

    //Keliling Pesergi Panjang
    echo "<b>Menghitung Keliling dan Luas Persegi Panjang</b><br>" ;
    echo "Panjang =" . $panjang . "<br>";
    echo "Lebar =" . $lebar . "<br>";
    echo "Luas Persegi Panjang =" . $luaspersegi . "<br>";
    echo "Keliling Persegi Panjang =" . $kelpersegi . "<br>" . "<br>";
    echo "<b>Menghitung Keliling dan Luas Lingkaran</b><br>" ;
    echo "Luas Lingkaran =" . $luaslingkaran . "<br>";
    echo "Keliling Lingkaran =" . $kelLingkaran;

    //Operator Assignment 
    
?>