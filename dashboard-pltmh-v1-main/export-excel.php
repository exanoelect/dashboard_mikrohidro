<?php 
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=data-excel.xls");
     
    // tambahkan table
    include 'laporan.excel.php';
?>