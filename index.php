<?php include 'db.php'  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ma premiere page PHP</title>
	<style></style>

</head>
<body>
	<div class="menu">
		<nav>
			<ul>
				<li> <a href="home.php" class="active">Home</a> </li>
				<li> <a href="afficher_etudiants.php">Etudiants</a> </li>
			</ul>
		</nav>
		
	</div>
	<div class="container">
		<form method="POST" action="#">
			<p>Nouvel etudiant</p>
			
					<fieldset>
						<legend>Inscription</legend>

						<div>
							<label for="nom">Nom:</label>
							<input type="text" name="nom" id="nom" required>	
						</div>

						<div>
							<label for="age">Age:</label>
							<input type="text" name="age" id="age">	
						</div>

						<div>
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" required>
						</div>

						<div>
							<label for="password">Mot de passe:</label>
							<input type="password" name="password" id="password" required>
						</div>

						<div class="submit" >
							<input type="submit" name="submit">
						</div>
						
					
					</fieldset>	
			
			
		</form>
	</div>

	<?php /*echo "<p>Bonjour le monde</p>"; 


	#exercice
	echo "<p> Exercice: écrire un programme qui permet de calculer la somme de deux valeurs initialisées au préalable</p>";
	$a = 5; 
	$b = 3;
	$c = $a + $b;
	echo "La somme de ".$a." et " .$b. " est: ".$c;*/

	//recuperation des données entrées par l'utilisateur grâce à l'objet, tableau $POST[];

	if (isset($_POST['submit'])){
		//on prend les données de $POST on les met dans des variablkes, puis on les envoie dans la base de données et s'il ya succes on affiche un message de succès
		$nom = $_POST['nom'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		//creation de la requete
		$sql = "INSERT INTO etudian (nom, age, email, password) VALUES ('$nom', '$age', '$email', '$password')";

		//utilisation de l'objet connexion

		if ($conn -> query($sql) === TRUE){ //si notre requete s'execute correctement dans une connexion à 
		//le BD, OU SI LA REQUETE EST EXECUTEE AVEC SUCCES

			echo "<p style='color: green; text-align: center;'> Etudiant enregistré avec succès</p>";

		}else{
			echo "<p style='color: red; text-align: center;'> Erreur d'enregistrement! " . $conn ->error ." pour " . $sql . "</p>";
		}

	}

	?>

</body>
</html>


