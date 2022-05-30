<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=bd_mybuddy;charset=utf8', 'root', '');
if(isset($_GET["id"]) AND !empty($_GET["id"])){
	$getId = $_GET["id"];
	$recupAdmin = $pdo->prepare("SELECT * FROM user WHERE identifiant = ? AND role = 'admin'");
	$recupPedagogue = $pdo->prepare("SELECT * FROM user WHERE identifiant = ? AND role = 'pedagogue'");
	$recupEleve = $pdo->prepare("SELECT * FROM user WHERE identifiant = ? AND role = 'eleve'");

	$recupAdmin->execute(array($getId));
	$recupPedagogue->execute(array($getId));
	$recupEleve->execute(array($getId));

	if($recupAdmin->rowCount()>0){

		$bannirUser = $pdo->prepare("DELETE FROM user WHERE identifiant = ?");
		$bannirUser->execute(array($getId));

		$bannirAdmin = $pdo->prepare("DELETE FROM admin WHERE identifiant = ?");
		$bannirAdmin->execute(array($getId));

		header("Location: index.php");
	}
	elseif($recupPedagogue->rowCount()>0){
		$bannirUser = $pdo->prepare("DELETE FROM user WHERE identifiant = ?");
		$bannirUser->execute(array($getId));

		$bannirPedagogue = $pdo->prepare("DELETE FROM pedagogue WHERE identifiant = ?");
		$bannirPedagogue->execute(array($getId));

		header("Location: index.php");
	}
	elseif($recupEleve->rowCount()>0){
		$bannirUser = $pdo->prepare("DELETE FROM user WHERE identifiant = ?");
		$bannirUser->execute(array($getId));

		$bannirEleve = $pdo->prepare("DELETE FROM eleve WHERE identifiant = ?");
		$bannirEleve->execute(array($getId));

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