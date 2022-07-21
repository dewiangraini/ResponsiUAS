<!-- TAMPILAN OUTPUT JIKA SUDAH MENJALANKAN TRANSAKSI PEMESANAN PADA KAMAR KOS TERSEBUT -->
<html>
<head>
       <title>Output Pemesanan Kamar</title>
</head>
<body>
    <h1> Kamar Pesanan</h1>
    <?php
        $kode=$_POST['kode'];
        $nama=$_POST['nama'];
        $jenis=$_POST['jenis'];
        $tipe=$_POST['tipe'];
        $sewa=$_POST['sewa'];
        $lama=$_POST['lama'];
        
    if ($jenis=="Single room"){
        $harga=1500000;
    }
    else if ($jenis=="Double room room"){
        $harga=2000000;
    }
    else {
        $harga=3000000;
    }
    $subtotal=$harga*$lama*$sewa;
    if ($tipe=="VVIP"){
        $diskon=0.10*$subtotal;
    }
    else {
        $diskon=0;
    }
    $total=$subtotal-$diskon;
    ?>
    <pre>
        Kode Kamar   : <?php echo $kode; ?> <br>
        Nama Kamar   : <?php echo $nama; ?> <br>
        Jenis Kamar  : <?php echo $jenis; ?> <br>
        Type Kamar   : <?php echo $tipe; ?> <br>
        Tarif Sewa   : <?php echo "Rp.".number_format($harga); ?> <br>
        Banyak Sewa  : <?php echo $sewa; ?> Kamar <br>
        Lama Sewa    : <?php echo $lama; ?> Bulan <br>
        ======================================== <br>
        Subtotal     : <?php echo "Rp.".number_format($subtotal); ?> <br>
        Diskon       : <?php echo "Rp.".number_format($diskon); ?> <br>
        Total        : <?php echo "Rp.".number_format($total); ?> <br>
    </pre>
    <br>
        <a href="input-pemesanan.php">Booking Lagi</a>
    </br>
</body>
</html>