<?php

	include("bdd.php");
	include("index.php");

	class HACK {

		private $bdd;

		public function __construct() {
			$this -> bdd = new BDD();
		}

		public function afficherPage($mapage) {
			if(!$this -> bdd -> connexion()) {//Connexion à la BDD
			
				return;
			}
			
			if($mapage == 1) $this -> page1();
			else if($mapage == 2) $this -> page2();
			else $this -> page1();
			
			$this -> bdd -> deconnexion();
		}
		public function page1(){
			function get

		}
		
		
		public function page2() {
			echo "Deuxieme page";
			
		
			
		}
	}

	
?>