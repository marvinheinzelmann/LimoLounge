<!DOCTYPE html>

<?php
	session_start();

	function checkOption($optn){
		echo $optn . ': ';
		
		if(!empty($_POST[$optn])){
			echo 'ja <br>';
			$_SESSION[$optn] = true;
		} else {
			echo 'nein <br>';
			$_SESSION[$optn] = false;
		}
	}
	
	function checkOptionText($optn){
		echo $optn . ': ';
		
		if(!empty($_POST[$optn])){
			echo $Vorname <br>;
			$_SESSION['Vorname'] = $Vorname;
		} else {
			echo $Vorname '<br>';
			$_SESSION['Vorname'] = 'Nicht Angegeben';
		}
	}
?>
<html>
	<head>
		<title>Bestellbest�tigung</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	</head>
	
	<body>
		<div id="shade"></div>
		<div id="directory">
			<a href="http://limolounge.16mb.com/"><div id="logo"><img id="logo-img" src="Bilder/Logo.png"></div></a>
			<div class="dir-item"><a href="http://limolounge.16mb.com/" class="dir-link">Start</a></div>
			<div class="dir-item"><a href="http://limolounge.16mb.com/configuration/" class="dir-link">Configurate</a></div>
			<div class="dir-item"><a href="http://limolounge.16mb.com/configuration/staff/" class="dir-link">Staff</a></div>
		</div>
		<div class="config-step" style="z-index: 3">
			<h1>Bestellung �bepr�fen:</h1>
			<h2>Geschmack</h2>
			<?php
				checkOption('Apfel');
				checkOption('Himbeere');
				checkOption('Mandarine');
				checkOption('Mango');
				checkOption('Orange');
				checkOption('Zitrone');
			?>
			<h2>Farbe</h2>
			<?php
				checkOption('Blau');
				checkOption('Gelb');
				checkOption('Gruen');
				checkOption('Rot');
				checkOption('Violett');
			?>
			<h2>Spezielle Zutaten</h2>
			<?php
				checkOption('Kohlensaeure');
				checkOption('Koffein');
			?>
			<h2>Zahlungsdaten</h2>
				<form action="confirm/index.php" method="post">
					Vorname: <input type="text" name="Vorname"><br>
					Lieferadresse: <input type="text" name="Lieferadresse">
				</form>
			<?php
				checkOptionText('Vorname');
				checkOptionText('Lieferadresse');
			?>
			<a href="order/index.php?<?php echo htmlspecialchars(SID); ?>"><div class="button" id="btn-Finished">Bestellen</div></a>
		</div>
	</body>

</html>
