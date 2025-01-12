<?php 

	$host = 'localhost';
	$user = 'root';
	$password = 'root';
	$dbname = 'gestion_etudiant_1';


	//create connexion with mysqli()
	$conn = new mysqli($host, $user, $password, $dbname);

	//verifier si la connexion a reussi
	if ($conn -> connect_error){
		die("connexion failed: ". $conn -> connect_error);
	}




 ?>