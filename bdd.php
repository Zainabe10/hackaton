<?php
class BDD{



	private $mysqli;
	

	public function __construct() {
		$this -> mysqli = false;
	}

	/* Connexion à la base de données */
	public function connexion() {
		mysqli_report(MYSQLI_REPORT_OFF);
		
		$this -> mysqli = new mysqli('172.16.117.8' ,'Hackaton', 'messaoudi', '1234');

		if($this -> mysqli -> connect_errno != 0) {
			return false;
		}
		else return true;
	}
	
	
	/* Déconnexion à la base de données */
	public function deconnexion() {
		if($this -> mysqli -> connect_errno != 0) {
			$this -> mysqli -> close();
		}
	}
	public function getEnfant($Enfant_id) {
		$Enfant = null;
	
		$requete = $this->mysqli->prepare("SELECT Enfant.id, Enfant.nom, Enfant.prenom, Enfant.adresse, Enfant.livraison_id FROM Enfant WHERE Enfant.id = ?");
		$requete->bind_param('i', $Enfant_id);
	
		$requete->execute();
		$resultat = $requete->get_result();
	
		if ($enregistrement = $resultat->fetch_object()) {
			$Enfant = $enregistrement;
		}
	
		$requete->close();
	
		return $Enfant;
	}
	
}


	
	
	
	
	
	
?>







