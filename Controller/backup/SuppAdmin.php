<?php
require_once('../Model/Admin.class.php');
$admin = new Admin($_POST['nom'],$_POST['login'],$_POST['password'],$_POST['email']);
$admin->supprimer();

header("location:../liste-admin.php?resultat=ouiSupp");
//exit();
?>