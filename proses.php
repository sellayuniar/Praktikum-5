<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php //perintah php
	include "inc.php"; //mengeksekusi file inc.php
	echo $angka; //menampilkan nilai variabel angka
	echo "<br>"; //menampilkan ganti baris
	if ($angka==100) { //jika nilai variable angka sama dengan 100 tampilkan teks memuaskan
		echo "Memuaskan";
	}
	elseif ($angka<100&&$angka>=85) { //jika tidak nilai variable angka kurang dari 100 dan nilai variabel angka lebih dari 85 tampilkan teks sangat baik
		echo "Sangat Baik"; 
	}
	elseif ($angka<85&&$angka>=70) { //jika tidak nilai variable angka kurang dari 85 dan nilai variabel angka lebih dari 70 tampilkan teks baik
		echo "Baik";
	}
	elseif ($angka<70&&$angka>=55) {//jika tidak nilai variable angka kurang dari 70 dan nilai variabel angka lebih dari 55 tampilkan teks cukup
		echo "Cukup";
	}
	elseif ($angka<55&&$angka>=0) {//jika tidak nilai variable angka kurang dari 55 dan nilai variabel angka lebih dari 0 tampilkan teks kurang
		echo "Kurang";
	}
	?>
</body>
</html>