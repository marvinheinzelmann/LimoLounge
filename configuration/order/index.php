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
		<h2>Aromen</h2>
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
		Passionsfrucht: <?php
			if(!empty($_POST['Passionsfrucht'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
		<h2>Farbstoffe</h2>
		Gelb: <?php
			if(!empty($_POST['Gelb'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
		Rot: <?php
			if(!empty($_POST['Rot'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
		<h2>Spezielle Zutaten</h2>
		Kohlens�ure: <?php
			if(!empty($_POST['Kohlens�ure'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
		Koffein: <?php
			if(!empty($_POST['Koffein'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
	</body>
</html>
