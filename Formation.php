<?php
 
class Formation
{
  public $_id;
  public $_idPre;
  public $_titre;

 

   function __construct($idPre,$titre) {
	  
		
			$this->_idPre=$idPre;
			$this->_titre= $titre;
			 			
		
    }
	 function add(){
		 
	 require_once("connectDB.php");
	 $servername = "localhost";
$username = "root";
$password = "";
$db="tp1";
	 $conn = new mysqli($servername, $username, $password,$db);
	 $sql = $conn->prepare("INSERT INTO Formation (	idPersonne,titre) VALUES (?, ?)"); 
		
		
		$sql->bind_param("is",$this->_idPre,$this->_titre);
		
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
	 
	
}