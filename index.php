<meta charset="utf-8" />
<?php
require_once("util/fonctions.php");
require_once("util/class.pdo.php");
session_start();
if (!isset($_SESSION['id'])) {
  $uc = 'login';
}
else
{
  $uc = !empty($_REQUEST['uc']) ? $_REQUEST['uc'] : 'accueil';
}

/* Cr�ation d'une instance d'acc�s � la base de donn�es */
$pdo = PdoMyBuddy::getPdoMyBuddy();
switch($uc)
{
	case 'login':
		{include("controleurs/c_login.php");break;}
  case 'accueil':
    {
      if($_COOKIE['role']=="eleve"){
        header("location: vues/v_accueilE/index.php");
        exit();
        break;}
      else if($_COOKIE['role']=="pedagogue"){
        header("location: vues/v_accueilP/index.php");
        exit();
      }
      else if($_COOKIE['role']=="admin"){
        header("location: vues/v_accueilA/index.php");
        exit();
      }
    }
  case 'gestion':
    {include("controleurs/c_gestion.php");break;}
  
  case 'transfert' :
      {
        include("controleurs/c_transfert.php");
        break;
      }
}
?>
