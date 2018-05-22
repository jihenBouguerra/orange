<!DOCTYPE html>
<html lang="en">
<head>
	<title>Info personnelle</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container">
		</br> </br></br>
<form method="post" action="">
			<p class="h2">Ajouter Formation</p>
						</br> </br></br>
						<div class="form-row">
			  
				<div class="form-group col-md-10">
				  <label for="inputEmail4">Formations</label>
				  <input type="text" class="form-control"   required="required"  name ="formation"  placeholder="Formation">
				</div>
				<div class="form-group col-md-2">
				 			  <input  class="btn btn-primary" type="submit" name="sub" value="+" />

				  
				</div>
				
			  </div>
	</form	>	
<?php @session_start();
include 'Personne.php';
include 'Formation.php';
 
 
						$personne = new Personne("","","","");
						$personne->_id=$_SESSION['id'];
						$personne->getFormation();
						
 ?>	
				</br> </br></br>
				<p class="h2">Modifier ves données</p>
				</br> </br></br>

			<form method="post" action="">
			  <div class="form-row">
			  
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Nom</label>
				  <input type="text" class="form-control"  value=" <?php 	echo $_SESSION['nom']; ?> " name ="nom" required="required" placeholder="Nom">
				</div>
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Prenom</label>
				  <input type="text" class="form-control" value=" <?php 	echo $_SESSION['prenom'];?> "   name ="prenom" required="required"  placeholder="Prenom">
				</div>
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Email</label>
				  <input type="email" class="form-control" name ="email"  id="inputEmail4" required="required" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">Password</label>
				  <input type="password" class="form-control"name ="mdp" id="inputPassword4" required="required" placeholder="Password">
				</div>
			  </div>
			  <div class="form-row">
			  
				<div class="form-group col-md-4">
				  <label for="inputEmail4">Age</label>
				  <input type="number" class="form-control"  placeholder="Age">
				</div>
				<div class="form-group col-md-8">
				  <label for="inputEmail4">Num Telephone</label>
				  <input type="tel" class="form-control"  placeholder="Num">
				</div>
				
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-4">
				  <label for="inputEmail4">Adress</label>
				  <input type="text" class="form-control"  placeholder="Adress">
				</div>
				<div class="form-group col-md-4">
				  <label for="inputEmail4">Ville</label>
				  <input type="text" class="form-control"  placeholder="Ville">
				</div>
				<div class="form-group col-md-4">
				  <label for="inputEmail4">Pays</label>
				  <input type="text" class="form-control"  placeholder="Pay">
				</div>
				
			  </div>
			 
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputCity">Niveau Etude</label>
				  <input type="text" class="form-control" id="inputCity">
				</div>
				<div class="form-group col-md-4">
				  <label for="inputState">Profil</label>
				  <select id="inputState" class="form-control">
					<option selected>Devloppeur</option>
					<option selected>Deseigner</option>
					<option>...</option>
				  </select>
				</div>
				<div class="form-group col-md-2">
				  <label for="inputZip">Date Naissance</label>
				  <input type="date" class="form-control" id="inputZip">
				</div>
			  </div>
			  <input  class="btn btn-primary" type="submit" name="submit" value="Save" />
			 
			  
			 
			  

</form>
			
		</div>
	</div>
	
	<?php 
		
//

			 if(!empty($_POST['submit'])) {
				 
						$_prenom= $_POST['prenom'];
						$_nom=$_POST['nom'];
						$_email= $_POST['email'];
						$_mdp= $_POST['mdp'];
						 
						$personne = new Personne($_nom,$_prenom,$_email,$_mdp);
						$personne->_id=$_SESSION['id'];
						echo"*****".$personne->_id;
						$personne->update();
					
			 }
			 if(!empty($_POST['sub']) && !$_POST['formation'] ) {
				 echo "hereeeeeeeeeeeeeeee";
						$_titre= $_POST['formation'];
						$_idp=$_SESSION['id'];
						 
						$fromation = new Formation($_idp,$_titre);
						$fromation->add();
						 
								
						
			 }
	 
?>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->


</body>
</html>