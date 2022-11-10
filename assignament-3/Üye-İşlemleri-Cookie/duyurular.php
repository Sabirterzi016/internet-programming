<html>
	<head>
		<meta charset="utf-8" />
		<title>Üyelik Sistemi</title>
	</head>
	<body>
		<?php require 'veriler/menu.php'; ?>
		<p>Duyurular</p>
		
		<?php
		if (isset($_COOKIE['kullanici_adi'])) {
		?>
		<ol>
			<li>TOGG artık yollarda!</li>
			<li>Vizelere tam bir yıl bir hafta kaldı.</li>
			<li>Seçime 8 ay kaldı.</li>
		</ol>
		<?php
		} else {
			echo '<h5 style="background-color: red; color: white">Duyuruları yalnızca üyeler görebilir!</h5>';
		}
		
		?>
		
	</body>
</html>