<?php 
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=Hukum/Reelas.xls");
     
    // tambahkan table
    include 'tampil_hkm.php';
?>