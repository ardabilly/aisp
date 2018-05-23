<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=laporanbrgmasuk.xls");
 
// Tambahkan table
include 'laporan/laporan_brgmasuk.php';
?>