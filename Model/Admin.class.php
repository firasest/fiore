<?php
class Admin{
private $nom;
private $login;
private $password;
private $email;
                

function __construct($nom,$login,$password,$email){
$this->nom = $nom;
$this->login = $login;
$this->password = $password;
$this->email = $email;


}
public function getAttribut(){ return $this->attribut ;}


public function setAttribut($attribut){ $this->attribut = $attribut ;}



public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM admin WHERE login LIKE '$this->login'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `admin`(`nom`, `login`, `password`, `email`) VALUES ('$this->nom','$this->login','$this->password','$this->email')");
		
		echo'oui';
                //return TRUE;
    } else {
                echo'non';
                //return FALSE;
	}
}

    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE `admin` SET `nom`='$this->nom',`login`='$this->login',`password`='$this->password',`email`='$this->email' WHERE id=$id");				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admin WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>