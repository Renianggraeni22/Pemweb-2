<?php
//tangkap input form
$nama = $_GET['nama'] ;
$matkul = $_GET['matkul'] ;
$uts = $_GET['uts'] ;
$uas = $_GET['uas'] ;
$tugas = $_GET['tugas'] ;

//tampilkan hasil input
echo "<br> Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matkul";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai UAS: $uas";
echo "<br> NILAI Tugas: $tugas";