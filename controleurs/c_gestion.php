<!-- Controleur pour consulter et commander le site -->
<?php
$action = $_REQUEST['action'];
if($_COOKIE['role']=="eleve"){
    switch($action)
    {
        case 'voirEspacePerso':
            {
                header("Location: vues/v_perso/index.php");
                exit();
                break;
            }
        case 'voirPlanning':
            {
                header("Location: vues/v_planningAbs/index.php");
                exit();
                break;
            }
        case 'voirCours':
            {
                header("Location: vues/v_cours/index.php");
                exit();
                break;
            }
        case 'voirDemandes':
            {
                header("Location: vues/v_demandes/index.php");
                exit();
                break;
            }
        case 'voirAccueil':
            {
                header("Location: vues/v_accueilE/index.php");
                exit();
                break;
            }
    }
}
else if($_COOKIE['role']=="pedagogue"){
    switch($action)
    {
        case 'voirAccueilP':
            {
                header("Location: vues/v_accueilP/index.php");
                exit();
                break;
            }
        case 'voirPlanningP':
            {
                header("Location: vues/v_planningP/index.php");
                exit();
                break;
            }
        case 'voirCoursTransmettreP':
            {
                header("Location: vues/v_coursTransmettreP/index.php");
                exit();
                break;
            }
        case 'voirDemandeRecuesP':
            {
                header("Location: vues/v_demandeRecuesP/index.php");
                exit();
                break;
            }
        case 'voirElevesP':
            {
                header("Location: vues/v_elevesP/index.php");
                exit();
                break;
            }
        case 'voirSuiviP' :
            {
                header("Location: vues/v_suiviP/index.php");
                exit();
                break;
            }
    }
}

?>