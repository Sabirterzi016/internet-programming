<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
     	<br>
     	<h3>Toplama İşlemi</h3>
     	<h4>Sayı 1:<input type="number" name="sayi1" placeholder="Sayı gir"></h4>

     	<h4>Sayı 2:<input type="number" name="sayi2" placeholder="Sayı gir"></h4><br>

     	<button type="submit" name="buton">Topla</button><br>
     	<?php
	if(isset($_POST["buton"])){
		$sayi1=$_POST["sayi1"];
		$sayi2=$_POST["sayi2"];
		$toplam=$sayi1+$sayi2;
		echo "<br><h3>Toplam = $toplam</h3>";
	}
	?>
     </form>
</body>
</html>