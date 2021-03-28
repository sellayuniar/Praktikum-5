<?php
if (empty($_POST['nama'])) { //jika method POST input type nama kosong
	header("location:kosong.php"); //browser akan mer-redirect ke halaman kosong.php
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>"; //jika tidak tampilkan Nama : nilai dari method Post iinput type nama
}
?>