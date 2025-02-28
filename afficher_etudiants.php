<?php  include 'db.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Afficher liste d'etudiants</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="menu">
		<nav>
			<ul>
				<li> <a href="index.php" >Home</a> </li>
				<li> <a href="afficher_etudiants.php" class="active">Etudiants</a> </li>
			</ul>
		</nav>
		
	</div>
	<div class="container_2">
		<p>Gerer les étudiants</p>
		<div>

			<table>
				<tr>
					<th>ID</th>
					<th>Nom</th>
					<th>Age</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>

				<?php 

					$sql = "SELECT * FROM etudian";
					$results = $conn->query($sql);

					if($results -> num_rows > 0){

						while ($row = $results -> fetch_assoc()){

							echo "<tr>

									<td>{$row['id']}</td>
									<td>{$row['nom']}</td>
									<td>{$row['age']}</td>
									<td>{$row['email']}</td>
									<td>
										<a style='text-decoration:none; border: 1px solid gray; background-color:gray; color: white; padding:5px;' href='edit_etudiant.php?id={$row['id']}'>Edit</a>
										<a style='text-decoration:none; border: 1px solid gray; background-color:red; color: white; padding:5px; 'href='delete_etudiant.php?id={$row['id']}'>Delete</a>

									</td>

								</tr>	

							";
						}

					}

				?>

		</table>
			
		</div>
		
		
	</div>








<?php  
//on va prendre tout ce qui est dans la BD et l'afficher dans un tableau
//les td de notre tableau viendront de la DB.





?>



</body>
</html>




