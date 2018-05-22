<?php
 
class Personne
{
  public $_id;
  public $_prenom;
  public $_nom;
 public $_email;
  public $_mdp;
  public $_pay;
  private $_ville;
  private $_adress;
  private $_date;
  private $_numero;
  private $_profile;
  private $_NivEtude;
 

   function __construct($nom,$prenom,$email,$mdp) {
	   if(isset($_SESSION['id'])){
			$this->_id=$_SESSION['id'];
		} 
		
			$this->_nom=$nom;
			$this->_prenom=$prenom;
			$this->_email =$email;
			$this->_mdp=$mdp;
			 			
		
    }
	 function add(){
		 
		require_once("connectDB.php");
		$sql = $conn->prepare("INSERT INTO personne (nom,mdp,email,prenom) VALUES (?, ?, ?, ?)"); 
		
		$sql->bind_param("sssi",$this->_nom,$this->_mdp,$this->_email,$this->_prenom);
		
		if($sql->execute()) {
			$success_message = "Added Successfully";
			echo $success_message ;
		} else {
			$error_message = "Problem in Adding New Record";
			echo $error_message ;
		}
		$sql->close();   
		$conn->close();
	 }
	 
	 
	 	 function login(){
			require_once("connectDB.php");
				$stmt = $conn->prepare("SELECT id,nom , prenom , email FROM personne WHERE email = ? and mdp = ?") ;
				$stmt->bind_param("ss", $this->_email, $this->_mdp);
				
				if($stmt->execute()) {
					$stmt->bind_result($this->_id,$this->_nom,$this->_prenom, $this->_email);
					@session_start();
					
					
					
					/*$_SESSION["prenom"] =$this->_prenom;
					$_SESSION["email"] =$this->_email;*/
					 
					$stmt->fetch();
					$_SESSION['nom'] =$this->_nom;
					$_SESSION['prenom'] =$this->_prenom;
					$_SESSION['id'] =$this->_id;
					$_SESSION['email'] =$this->_email;
					$_SESSION['mdp'] =$this->_mdp;
					
					
				} else {
					
				}
				
				$stmt->close();
				$conn->close();
			return $this->_id;
	 }
	 

	 
	 
	 function getFormation(){
		 require_once("connectDB.php");
		
			 $stmt = $conn->prepare("SELECT titre FROM formation WHERE 	idPersonne =?") ;

				
				$stmt->bind_param("s", $this->_id);
				$stmt->execute();

				do{
					$stmt->bind_result($titre);
					echo $titre . "</br>";
					
				}while($stmt->fetch());
				
				$stmt->close();
				$conn->close();
		 
	 }

 
	 function update(){
		 
		require_once("connectDB.php");
		 @session_start();
			  $stmt = $conn->prepare("UPDATE personne SET nom = ?, 
									   prenom= ?, 
									   email = ?,  
									   mdp= ? where 
									   id = ?") ;

			
				$stmt->bind_param("ssssi",$this->_nom,$this->_prenom,$this->_email,$this->_mdp,$this->_id);
				if($stmt->execute()) {
					
					$success_message = "Updated Successfully";
					$_SESSION['nom'] =$this->_nom;
					$_SESSION['prenom'] =$this->_prenom;
					$_SESSION['id'] =$this->_id;
					$_SESSION['email'] =$this->_email;
					$_SESSION['mdp'] =$this->_mdp;
					 
				} else {
					$error_message = "Problem in updating New Record";
					echo $error_message ;
				}
				$stmt->close();   
				$conn->close();
	 }
	 
	/* 
	 function deletee(){
			require_once("connectDB.php");
			$stmt = $conn->prepare("DELETE FROM msg WHERE id= ?");
			$stmt->bind_param('i', $this->_id);
				if($stmt->execute()) {
					$success_message = "deleted Successfully";
					echo $success_message ;
				} else {
					$error_message = "Problem in deleteing";
					echo $error_message ;
				}
			$stmt->close();   
			$conn->close();
		 
	 }*/
}