<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="postAct.php"> <!-- membuat form dengan method POST dan akan memanggil postAct.php ketika form dikirim-->
		<table width="400" align="center" cellpadding="2" cellspacing="2"> <!--membuat tabel -->
			<tr> <!--membuat baris pada tabel -->
				<td width="130">Nama </td> <!--membuat sel pada tabel dengan teks nama -->
				<td><input type="text" name="nama"></td> <!--membuat input type teks -->
			</tr>
			<tr> <!--membuat baris pada tabel -->
				<td width="130">Email</td> <!--membuat sel pada tabel dengan teks email -->
				<td><input type="text" name="email"></td> <!--membuat input type teks -->
			</tr>
			<tr> <!-- membuat baris pada tabel-->
				<td>
					<input type="submit" name="btnLogin" value="Login"> <!-- membuat input type submit dengan value login-->
					<input type="reset" name="reset" value="Reset"> <!-- membuat input type reset dengan value Reset-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>