<?php 

	include 'db.php';

	if (isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "DELETE FROM etudian WHERE id= $id";

		if ($conn-> query($sql) ===TRUE){
			header("Location: afficher_etudiants.php");
		}else {
			echo "Error: ". $conn -> error;
		}

	}

 ?>