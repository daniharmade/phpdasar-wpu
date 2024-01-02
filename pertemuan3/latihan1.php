<!-- Perulangan FOR dalam Studi Kasus -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="">
    <!-- TANGGAL -->
    Tanggal :
    <select name="" id="">
      <?php
      for ($a = 1; $a <= 31; $a++) {
        echo "<option>$a</option>";
      }

      ?>

    </select>

    <!-- BULAN -->
    Bulan :
    <select name="" id="">
      <?php
      for ($b = 1; $b <= 12; $b++) {
        echo "<option>$b</option>";
      }
      ?>

    </select>

    <!-- TAHUN -->
    Tahun :
    <select name="" id="">
      <?php
      for ($s = 1995; $s <= 2000; $s++) {
        echo "<option>$s</option>";
      }
      ?>
    </select>

    Jam :
    <select name="" id="">
      <?php
      for ($f = 1; $f <= 24; $f++) {
        echo "<option>$f</option>";
      }
      ?>
    </select>
  </form>
</body>

</html>

<?php
//Perulangan WHILE
$i = 1;
while ($i <= 5) {
  echo "Ini Looping WHILE<br>";
  $i++;
}

//Perulangan DOWHILE
$j = 10;
do {
  echo "<br>Ini Looping DO WHILE";
  $j++;
} while ($j < 5);

#KESIMPULAN, KALAU DO WHILE INI DILAKUKAN DLU SEKALI, SETELAH ITU BARU DI CEK APAKAH KONDISI SESUAI UNTUK MELAKUKAN LOOPING. KARNA DIA DO DAHULU, MENGERJAKAN DAHULU BARU DILAKUKAN PENGECEKAN
?>