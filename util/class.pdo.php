<?php
class PdoMyBuddy
{
  private static $monPdo;
	private static $monPdoMyBuddy = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 **/
private function __construct()
{
  PdoMyBuddy::$monPdo = new PDO('mysql:host=localhost;dbname=bd_mybuddy', 'root', '');
	PdoMyBuddy::$monPdo->query("SET CHARACTER SET utf8");
}
public function _destruct()
{
	PdoMyBuddy::$monPdo = null;
}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * @return l'unique objet de la classe PdoMyBuddy
 */
public static function getPdoMyBuddy()
{
	if(PdoMyBuddy::$monPdoMyBuddy == null)
	{
		PdoMyBuddy::$monPdoMyBuddy= new PdoMyBuddy();
	}
	return PdoMyBuddy::$monPdoMyBuddy;
}

public function getLogin($login, $motdepasse)
{
    $req="SELECT IDENTIFIANT, MDP FROM user WHERE IDENTIFIANT = '$login' AND MDP = '$motdepasse'";
    $res = PdoMyBuddy::$monPdo->query($req);
    $identifiant = $res->fetch();
    if($identifiant[0] == $login && $identifiant[1] == $motdepasse){
        return true;
    }
    else{
        return false;
    }
}
public function getLoginID($login, $motdepasse){
    $arrayIdRole = array();
    $req="SELECT IDENTIFIANT, ROLE FROM user WHERE IDENTIFIANT = '$login' AND MDP = '$motdepasse'";
    $res = PdoMyBuddy::$monPdo->query($req);
    $id = $res->fetch();
    $arrayIdRole[0] = $id[0];
    $arrayIdRole[1] = $id[1];
    return $arrayIdRole;
}

public function get_Info_Eleve($login){
    $req="SELECT NOM, PRENOM, HANDICAP, CLASSE, AMENAGEMENT, SUJET, DETAILS FROM ELEVE E, RDV R WHERE E.IDENTIFIANT = R.ID_ELEVE AND E.IDENTIFIANT = '$login'";
    $res = PdoMyBuddy::$monPdo->query($req);
    $resInformations = $res->fetch();
    $leleveAffiche[] = $resInformations;
    return $leleveAffiche;
}

public function nouvelle_Absence($date, $idEleve, $presence){
    $req="INSERT INTO AGENDA VALUES('$date','$presence','$idEleve')";
    $res = PdoMyBuddy::$monPdo->exec($req);
}

public function coursE($id)
      {
        $req = "SELECT matiere, commentaires, fichiers, date_cours from cours where id_eleve = '$id'";
        $res = PdoMyBuddy::$monPdo->query($req);
        $laLigne = $res->fetchAll();
        return $laLigne;
      }

public function envoieDemande($sujet, $message, $id_eleve, $id_peda)
  {
    $req = "INSERT INTO rdv (id_eleve,id_peda,sujet,details) VALUES('$id_eleve','$id_peda','$sujet','$message')";
    $res = PdoMyBuddy::$monPdo->exec($req);
  }

}
?>