<!-- Controleur pour consulter et commander le site -->
<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'transfert':
        {
            $sujet=$_REQUEST["demandes"];
            $message=$_REQUEST["message"];
            $id_eleve=$_SESSION['id'];
            $id_peda='papaz1';
            $pdo -> envoieDemande($sujet, $message , $id_eleve, $id_peda);
            header("location: vues/v_demandes/index.php");
            exit();
            break;
        }
}
?>
