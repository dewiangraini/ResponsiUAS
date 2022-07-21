<!-- OUTPUT HASIL DATA YANG DI ISI TADI. BISA JUGA LIATNYA PADA guestbook.txt. NTAR JUGA HASILNYA BAKAL SAMA KOK :) -->
<?php 
    echo "<head><title>My Guest Book</title></head>";
    $fp = fopen("guestbook.txt", "r");
    echo "<table border='0'>";

    while ($isi = fgets($fp)){
        $pisah = explode('|', $isi);
        echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
        echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
        echo "<tr><td>Notelpon: </td><td>: $pisah[2] </td></tr>";
        echo "<tr><td>Status: </td><td>: $pisah[3] </td></tr>";
        echo "<tr><td><br></td><td><br></td></tr>";
    }
    echo "</table>";
    echo "<a href='index.php'> Isi buku tamu </a>";
    echo "<br><a href='Responsi.html'> Menu </a></br>";
?>