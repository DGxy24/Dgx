<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perhitungan</title>
</head>
<body>
	<?php
		if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])) {
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			$operator = $_POST['operator'];

			switch ($operator) {
				case '+':
					$hasil = $angka1 + $angka2;
					break;
				case '-':
					$hasil = $angka1 - $angka2;
					break;
				case '*':
					$hasil = $angka1 * $angka2;
					break;
				case '/':
					$hasil = $angka1 / $angka2;
					break;
				default:
					$hasil = "Operator tidak valid";
					break;
			}

			echo "<h2>Hasil Perhitungan:</h2>";
			echo "<p>$angka1 $operator $angka2 = $hasil</p>";
		} else {
			echo "<h2>Maaf, data tidak lengkap</h2>";
		}
	?>
</body>
</html>
