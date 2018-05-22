<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Particulier</title>
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
				<p class="h2">Login particulier</p>
				</br> </br></br>

					<form method="post" action="">
			  <div class="form-row">
			  
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Email</label>
				  <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">Password</label>
				  <input type="password" name="mdp" class="form-control" id="inputPassword4" placeholder="Password">
				</div>
			  </div>
			  
		
			  
			 <input  class="btn btn-primary" type="submit" name="submit" value="Sign up"/>
			
			 
			  <button type="reset" class="btn btn-primary">Reset</button>
			  

</form>
		 <a href="inscription.php"  >Inscrivez vous </a>	
		</div>
	</div>
	
		<?php 
			include 'Personne.php';
			 if(!empty($_POST['submit'])) {
				 
					
					$_email= $_POST['email'];
					$_mdp= $_POST['mdp'];
				
					
					$personne = new Personne("","",$_email,$_mdp);
					$id=$personne->login();
					
					if($id!=0)
					{	
						$_SESSION['id']=$id;
						
						header('Location: info.php'); 
					}
					
					else 
					echo "not connected";
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