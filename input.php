<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="hasilkirim.php"> <!-- membuat form dengan method POST dan akan memanggil file hasilkirim.php setelah form dikirimkan-->
		<table> <!--membuat tabel -->
			<tr> <!--membuat baris -->
				<td width="130">Nama</td> <!--membuat isi cell pada baris dengan teks nama -->
				<td><input type="text" name="nama"></td> <!--membuat input type text  -->
			</tr>
			<tr> <!--membuat baris -->
				<td colspan="2" align="center"> <!--membuat cell pada baris -->
					<input type="submit" name="btnlogin" value="Kirim"> <!--membuat input type submit dengan value kirim -->
					<input type="reset" name="reset" value="reset"><!--membuat input type reset dengan vakue reset -->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>