<?php


class medicament{

private $pdo;

	public function __construct() {
		$config = parse_ini_file("config.ini");
		
			$this->pdo = new \PDO("mysql:host=".$config["host"].";dbname=".$config["database"], $config["user"], $config["password"]);
		
		}


		private $ID;
		private $nom;
		private $catégorie;
		private $prix;

		public function __construct($n,$c,$p){
			
			$this->nom = $i;
			$this->catégorie = $c;
			$this->prix = $p;

		}
		 public function __get($name) {

       		return $this->$name;
    }

    public function __set($name, $value) {

        $this->$name = $value;
    }



	}





}





?>