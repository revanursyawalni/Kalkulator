<html>
	<head>
		<title>Calculator On-Line - final operation</title>
	</head>

	<body>
		<?php
		// 
		$texta = (int)$_POST["txta"];
		$textb = (int)$_POST["txtb"];
		$operator = (string)$_POST["operator"];

		// 
		echo "<h1>Hai Kalkulator: " . $texta . " e " . $textb . ".</h1>";

		//Operasi
		if ($operator == "+") {
			echo "<h1>Masukan Angka: " . ($texta + $textb) . "</h1>";
		}elseif ($operator == "-") {
			echo "<h1>Masukan Angka : " . ($texta - $textb) . "</h1>";
		}elseif ($operator == "*") {
			echo "<h1>Masukan Angka: " . ($texta * $textb) . "</h1>";
		}elseif ($operator == "/") {
			echo "<h1>Masukan Angka: " . ($texta / $textb) . "</h1>";
		}
		
		?>
	</body>	
</html>