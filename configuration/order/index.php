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
	
	$conn->select_db('u317246684_test');
?>
<html>
	<head>
		<title>Bestellbest�tigung</title>
	</head>
	
	<body>
		<h1>Vielen Dank f�r ihre Bestellung.</h1>
		Zitrone: <?php
			if(!empty($_POST['Zitrone'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
		Orange: <?php
			if(!empty($_POST['Orange'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
	</body>
</html>
