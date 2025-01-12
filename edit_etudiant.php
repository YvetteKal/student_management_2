<!DOCTYPE html>


<?php 

include 'db.php';

	 
	if (isset($_GET['id'])){   #if we get the id from the page URL

		$id = $_GET['id'];

		$sql = "SELECT * FROM etudian WHERE id=$id";
		$result = $conn -> query($sql);
		$etudiant =  $result -> fetch_assoc();





		#after the user has modified the form inputs and clicked submit

		if(isset($_POST['submit'])){
			$nom = $_POST['nom'];
			$age = $_POST['age'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$sql = "UPDATE etudian SET nom='$nom', age = '$age', email = '$email', password = '$password' WHERE id = $id";


			if ($conn -> query($sql) === TRUE){
				echo "<p style = 'text-align: center; color: green'>Etudiant mis à jour avec succès </p>";
				header("Location : afficher_etudiants.php");
			}else {
				echo " <p style = 'text-align: center; color: red'> Erreur de mise à jour" . $conn -> error . " et " . $sql ." </p>";
			}

		}

	}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modifier etudiants </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="menu">
		<nav>
			<ul>
				<li> <a href="home.php" >Home</a> </li>
				<li> <a href="afficher_etudiants.php">Etudiants</a> </li>
			</ul>
		</nav>
		
	</div>
	<div class="container">
		<form method="POST" action="#">
			<p>Modifier etudiant</p>
			
			<fieldset>
				<legend>Inscription</legend>

				<div>
					<label for="nom">Nom:</label>
					<input type="text" name="nom" id="nom"  value = "<?php echo $etudiant['nom'] ?>" required>	
				</div>

				<div>
					<label for="age">Age:</label>
					<input type="text" name="age" id="age" value = "<?php echo $etudiant['age'] ?>">	
				</div>

				<div>
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" value = "<?php  echo $etudiant['email'] ?>" required>
				</div>

				<div>
					<label for="password">Mot de passe:</label>
					<input type="password" name="password" id="password" value = "<?php echo $etudiant['password'] ?>" required>
				</div>

				<div class="submit" >
					<input type="submit" name="submit">
				</div>
						
					
			</fieldset>	
			
			
		</form>
		

	</div>

</body>
</html>




<?php 


 ?>