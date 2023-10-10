<?php

	
	class materiel{
		
		private $ref_mat;
		private $nom_mat;
		
		public function __construct ()
		{
		}
		
		public function  get_ref_mat(){
			return $this->ref_mat;
		}
		public function  get_nom_mat(){
			return $this->nom_mat;
		}
		public function set_ref_mat(string $ref_mat){
			$this->ref_mat=$ref_mat;
		}
		public function set_nom_mat(string $nom_mat){
			$this->nom_mat=$nom_mat;
		}
		

	function create_mat ()
	{
		$connex= new Connexion();
		$con=$connex->connex();
		$Req= "INSERT INTO materiel (ref_mat,nom_mat) VALUES (:ref,:nom,)";
		$STMT = $con->prepare($Req);
		$STMT -> bindParam(':ref',$this->ref_mat);
		$STMT -> bindParam(':nom',$this->nom_mat);	
		$STMT ->execute();
	}
	
	function retrieve_mat ()
	{
		$connex= new Connexion();
		$con=$connex->connex();
		$Req= "SELECT * FROM materiel ";
		$STMT = $con->prepare($Req); 
		$STMT ->execute();
		return $STMT->fetchAll();
	}
	
	function update_mat ()
	{
		$connex= new Connexion();
		$con=$connex->connex();
		$Req= "UPDATE materiel SET nom_mat=:nom";
		$STMT = $BDD->prepare($Req);
		$STMT -> bindParam(':ref',$this->ref_mat);
		$STMT -> bindParam(':nom',$this->nom_mat);	
		$STMT ->execute();
	}
	
	function del_mat()
	{
		$connex= new Connexion();
		$con=$connex->connex();
		$Req= "DELETE FROM materiel ";
		$STMT = $BDD->prepare($Req);
		$STMT ->execute();
	}
	}