<!-- PROSES PEMANGGILAN PADA PROGRAM TAMPILAN BUKU TAMU TADI :) -->
<?php 
    $nama = $_POST['nama'];
    $notelpon = $_POST['notelpon'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    echo "<head><title>My Guest Book</title></head>";
    $fp = fopen("guestbook.txt", "a+");
    fputs($fp, "$nama|$alamat|$notelpon|$status\n");
    fclose($fp);
    header("Location: setelah-proses.php")
?>