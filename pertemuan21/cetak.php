<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Mahasiswa</title>

   <style>
   .content-table,
   h1 {
       margin: 0 auto;
       width: 80%;
       text-align: center;
       border-collapse: collapse;
       font-family: Arial, sans-serif;
       margin-top: 2%;
   }

   .signatory-info {
    margin-left: 66%;
    margin-top: 8%;
}

.signatory-info .rektor {
    margin-bottom: 30%;
}

.signatory-info p {
    margin: 8px 0;
}

}
   </style>
</head>
<body>
   <h1>Daftar Mahasiswa UIN Suska Riau</h1>
   <div id="container">
   <table border="1" cellpadding="10" cellspacing="0" class="content-table">
       <tr>
           <th>No</th>
           <th>Gambar</th>
           <th>NIM</th>
           <th>Nama</th>
           <th>Email</th>
           <th>Jurusan</th>
       </tr>';

$i = 1;
foreach ($mahasiswa as $row) {
    $html .= '<tr>
            <td>' . $i++ . '</td>
            <td><img src="img/' . $row["gambar"] . '" width="50"></td>
            <td>' . $row["nim"] . '</td>
            <td>' . $row["nama"] . '</td>
            <td>' . $row["email"] . '</td>
            <td>' . $row["jurusan"] . '</td>
        </tr>';
}

$html .= '</table>
       </div>
       <!-- TTD -->
       <div class="signatory-info">
           <p>Mengetahui,</p>
           <p class="rektor">Rektor UIN Suska Riau</p>
           <p>Prof. Dr. Khairunnas Rajab, M.Ag.<br>197208282006041002</p>
       </div>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('DaftarMahasiswaUSR.pdf', \Mpdf\Output\Destination::INLINE);
