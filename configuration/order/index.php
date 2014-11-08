<!DOCTYPE html>

<?php
	$servername = '';
	$username = '';
	$password = '';
	$dbname = '';
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die('Connection failed:\n' . $conn->connect_error);
	}
	
	function checkOption($optn){
		echo $optn . ': ';
		
		if(!empty($_POST[$optn])){
			echo 'ja <br>';	
		} else {
			echo 'nein <br>';
		}
	}
?>
<html>
	<head>
		<title>Bestellbest�tigung</title>
	</head>
	
	<body>
		<h1>Vielen Dank f�r ihre Bestellung.</h1>
		<h2>Aromen</h2>
		<?php
			checkOption('Zitrone');
			checkOption('Orange');
			checkOption('Passionsfrucht');
		?>
		<h2>Farbstoffe</h2>
		<?php
			checkOption('Gelb');
			checkOption('Rot');
		?>
		<h2>Spezielle Zutaten</h2>
		<?php
			checkOption('Kohlens�ure');
			checkOption('Koffein');
		?>
	</body>
</html>
