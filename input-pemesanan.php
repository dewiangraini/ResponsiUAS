<!-- PROSES BAGIAN TRANSAKSI PEMESANAN KAMARNYA BILA INGIN MENG NGEKOS DISANA ATUH :") -->
<html>
<head>
       <title>Input Pemesanan Kamaar</title>
       <style>
	       body {
		       background:url("logo.jpg") ;
		}
	</style>
</head>

<body>
       <form action="output-pemesanan.php" method="POST">
       <h1>PEMESANAN KOS GREN MUSLIMAH<br>FORM PEMESANAN KAMAR DISINI YA :3 </h1>
       <hr>
              <pre>
                     Kode Kamar  : <input type="text" name="kode">
                     Nama Kamar  : <input type="text" name="nama">
                     Jenis Kamar : <select name="jenis">
                                          <option value="Single room">Single Room
                                          <option value="Double room">Double ROOM
                                   </select>
                     Type Kamar  : <input type="radio" name="tipe" value="VIP">VIP
                                   <input type="radio" name="tipe" value="VVIP">VVIP
                     Banyak kamar yang disewa : <input type="text" name="sewa">
                     Lama Sewa   : <input type="text" name="lama">
       
                     <input type="submit" value="Proses"> <input type="reset" value="Batal">
              </pre>
       </hr>
       </form>
</body>
</html>