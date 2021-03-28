<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php //perintah php
	if (isset($variable_cookies)) { //jika periksa nilai variable cookies 
		echo 'Variabel cookiesnya "$variable_cookies" nilainya adalah'.$variable_cookies; //tampilkan teks variabel cookisnya (nilai variabel cookies) nilainya adalah nilai dari variabel cookies
	} else {//jika tidak tampilkan teks variabel cookies belum diterapkan
		echo "Variabel cookies belum diterapkan"; 
	}
	?>
</body>
</html>