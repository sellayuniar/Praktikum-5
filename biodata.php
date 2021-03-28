<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="isi_biodata.php"> <!-- membuat form dengan method POST dan akan memanggil file isi_biodata.php setelah form dikirimkan-->
		<h2> Masukan Biodata Anda: </h2> <!--tampilkan teks -->
		<table width="600"  cellpadding="2" cellspacing="2">  <!--membuat tabel -->
			<tr> <!--membuat baris pada tabel -->
				<td width="130">Nama </td> <!--membuat sel pada tabel dengan teks nama -->
				<td><input type="text" name="nama"></td> <!--membuat input type teks -->
			</tr>
			<tr> <!--membuat baris pada tabel -->
				<td width="130">Email</td><!--membuat sel pada tabel dengan teks email -->
				<td><input type="text" name="email"></td> <!--membuat input type teks -->
			</tr>
			<tr><!--membuat baris pada tabel -->
				<td width="130">Tempat dan Tanggal Lahir</td><!--membuat sel pada tabel dengan teks tempat tanggal lahir -->
				<td><input type="text" name="ttl"></td> <!--membuat input type teks -->
			</tr>
			<tr><!--membuat baris pada tabel -->
				<td width="130">Pendidikan</td> <!--membuat sel pada tabel dengan teks pendidikan -->
				<td><input type="text" name="pendidikan"></td> <!--membuat input type teks -->
			</tr>
			<tr><!--membuat baris pada tabel -->
				<td width="130">Alamat</td> <!--membuat sel pada tabel dengan teks alamat -->
				<td><input type="text" name="alamat"></td> <!--membuat input type teks -->
			</tr>
			<tr><!--membuat baris pada tabel -->
				<td width="130">Hobi</td><!--membuat sel pada tabel dengan teks hobi -->
				<td><input type="text" name="hobi"></td><!--membuat input type teks -->
			</tr>
			<tr><!--membuat baris pada tabel -->
				<td>
					<input type="submit" name="btnLogin" value="Kirim"> <!-- membuat input type submit dengan value kirim-->
					<input type="reset" name="reset" value="Reset"> <!-- membuat input type reset dengan value Reset-->
				</td>
			</tr>
		</table>
	</form>

</body>
</html>