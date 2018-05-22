<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inscription particulier</title>
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
				<p class="h2">Inscription our Entreprise</p>
				</br> </br></br>

			<form method="post" action="">
			  <div class="form-row">
			  
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Nom</label>
				  <input type="text" class="form-control"  name ="nom" required="required" placeholder="Nom">
				</div>
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Prenom</label>
				  <input type="text" class="form-control" name ="prenom" required="required"  placeholder="Prenom">
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
			 
			  
			  <input  class="btn btn-primary" type="submit" name="submit" value="Sign in" />
			 
			  
			  <button type="reset" class="btn btn-primary">Reset</button>
			  

</form>
	 <a href="loginEse.php"  >Login </a>			
	 </br> </br></br>
		</div>
	</div>
	
	<?php 
include 'Entreprise.php';
 if(!empty($_POST['submit'])) {
	 
	 	$_prenom= $_POST['prenom'];
		$_nom=$_POST['nom'];
		$_email= $_POST['email'];
		$_mdp= $_POST['mdp'];
	
		
		$personne = new Entreprise($_nom,$_prenom,$_email,$_mdp);
		$personne->add();
		//header("Location: login.php");
		//header('Location: login.php'); 
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