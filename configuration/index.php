<!DOCTYPE html>

<html>
	<head>
		<title>Seite noch im Aufbau</title>
	</head>
	
	<body>
		<h1>Diese Seite ist noch im Entwicklungsstadium.</h1>
		<p>Sie k�nnen daher noch keine Bestellungen aufgeben.</p>
		<p>Kommen sie sp�ter noch einmal. Bestellungen d�rften vorraussichtlich ab dem 10. Dezember m�glich sein</p>
		
		<?php
			$password = '';
			if(!$_POST['input'] == $password){
				?>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
					<input type="password" name="input">
				</form>
				<?php
			} else {
				?>
				Das Passwort war richtig!
				<a href="dev_index.html">Weiter zur Konfigurationsseite</a>
				<?php
			}
		?>
	</body>
</html>
