<?php 
echo "<h2>  BIODATA: </h2>"; //tampilkan teks BIODATA
echo " <h3>Nama :".$_POST['nama']."</h3>"; //tampilkan teks nama dan mengambil nilai dari method post input type nama
echo "<h3> Email :".$_POST['email']."</h3>"; //tampilkan teks Email dan mengambil nilai dari method post input type email
echo "<h3>Tempat dan Tanggal Lahir :".$_POST['ttl']."</h3>"; //tampilkan teks Tempat dan Tanggal Lahir dan mengambil nilai dari method post input type ttl
echo "<h3>Pendidikan :".$_POST['pendidikan']."</h3>"; //tampilkan teks pendidikan dan mengambil nilai dari method post input type pendidikan
echo "<h3> Alamat :".$_POST['alamat']."</h3>"; //tampilkan teks alamat dan mengambil nilai dari method post input type alamat
echo "<h3> Hobi :".$_POST['hobi']."</h3>"; //tampilkan teks Hobi dan mengambil nilai dari method post input type hobi
?>