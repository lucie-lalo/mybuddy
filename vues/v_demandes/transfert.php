<?php
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=bd_mybuddy;charset=utf8', 'root', '');
    $id = $_SESSION['id'];

    $valueDemande = htmlentities($_POST['demandes'], ENT_QUOTES, "UTF-8");
    $valuePedagogue = htmlentities($_POST['pedagogues'], ENT_QUOTES, "UTF-8");
    $valueMessage = htmlentities($_POST['message']);

    $addRdv = $pdo->prepare("INSERT INTO rdv(id_eleve,id_peda,sujet,details) VALUES (?,?,?,?)");
	$addRdv->execute(array($id,$valuePedagogue,$valueDemande,$valueMessage));

	header("Location: index.php");
?>