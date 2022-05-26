<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=bd_mybuddy', 'root', '');
if(isset($_GET["id"]) AND !empty($_GET["id"])){
	$getId = $_GET["id"];
	$recupUser = $pdo->prepare("SELECT * FROM user WHERE identifiant = ?");
	$recupUser->execute(array($getId));
	if($recupUser->rowCount()>0){
		$findRole = $pdo->query("SELECT role FROM user WHERE identifiant = '$getId'");
		$roleUser = $findRole->fetch();

		$bannirUser = $pdo->prepare("DELETE FROM user WHERE identifiant = ?");
		$bannirUser->execute(array($getId));

		$bannirRole = $pdo->prepare("DELETE FROM $roleUser[0] WHERE identifiant = ?");
		$bannirRole->execute(array($getId));

		header("Location: index.php");
	}
	else{
		echo "Aucun membre n'a été trouvé";
	}
}
else{
	echo "L'identifiant n'a pas pu être récupéré";
}
?>