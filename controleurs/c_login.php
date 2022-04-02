<?php
$action = !empty($_REQUEST['action']) ? $_REQUEST['action'] : 'login';
switch($action)
{

  case 'login':
  {
    header('Location: vues/v_login/index.php');
    break;
  }

  case 'getLogin':
  {
    $login = $_REQUEST['Identifiant'];
    $motdepasse = $_REQUEST['password'];
    $testLogin = $pdo -> getLogin($login, $motdepasse);
    if($testLogin == true)
    {
      $roleID = $pdo -> getLoginID($login, $motdepasse);
      $_SESSION['id'] = $roleID[0];
      setcookie("role", $roleID[1]);
      header("Location:index.php");
      exit();
    }
    else
    {
      $message = $login;
      include("vues/v_message.php");
      $message = $motdepasse;
      include("vues/v_message.php");
      $message = "Votre Identifiant ou Mot de passe est incorrect !";
      include("vues/v_message.php");
    }
    break;

  }

  case 'deconnexion':
  {
    session_start();
    unset($_SESSION['id']);
    unset($_COOKIE['role']);
    session_destroy();
    header("Location:index.php");
  }

}
?>
