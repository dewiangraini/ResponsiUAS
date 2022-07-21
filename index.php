<!-- UNTUK MENGISI BUKU TAMU,DIMANA NANTI NYA BAKAL MASUK KE FILE EKSTERNAL (guestbook.txt) -->
<html>
	<head>
		<title>My Guest Book</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<style>
			body {
				background:url("logo.jpg") ;
			}
		</style>
	</head>

	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">BUKU PENGUNJUNG MAMI KOS </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>No Telpon</td>
						<td><input name="notelpon" type="text" id="notelpon"></td> </tr>
					</tr>

					<tr>
						<td>Status</td>
						<td>
							<select name="status" id="status">
								<option>Pelajar</option>
								<option>Pekerja</option>
							</select>
						</td>
					</tr>

					<tr>
						<td></td>
						<td>
							<input type="submit" name="Submit" value="Kirim">
							<input type="reset" name="Submit2" value="Batal">
						</td>
					</tr>
				</table>
			</form>
		<div align="center">
			<strong>
				<a href="lihat.php">::Lihat Buku Pengunjung::</a>
				<br>
					<a href="Responsi.html">::Menu::</a>
				</br>
			</strong>
		</div>
	</body>
</html>