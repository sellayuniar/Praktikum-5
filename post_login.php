<?php //perintah php
if (empty($_POST['nama']) || (empty($_POST['email']))) { //jika nilai dari method post input type nama kosong atau nilai dari method post email kosong maka redirect kehalaman redirect.php 
		header("location:redirect.php");
} else { //jika tidak
echo " Nama :".$_POST['nama']."<br>"; //tampilkan teks nama dan mengambil nilai dari method post input type nama
echo " Email :".$_POST['email']."<br>"; //tampilkan teks email dan mengambil nilai dari method post input type email
date_default_timezone_set('Asia/Jakarta'); //membuat default timezone asia/jakarta
echo date('H:i:s a, l-d-m-Y'); //menampilkan tanggal, hari, dan waktu
}
?>