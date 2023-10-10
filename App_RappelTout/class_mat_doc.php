<?php
        
        class Materiel{
                
                private  $Reference;
                private $Description;
                private  $Date_creation;
                private  $Date_Exp;
                private $Date_Rappel;

               public function __construct($Reference, $Description, $Date_creation, $Date_Exp, $Date_Rappel) {
                    
                    $this->Reference = $Reference;
                    $this->Description = $Description;
                    $this->Date_creation = $Date_creation;
                    $this->Date_Exp = $Date_Exp;
                    $this->Date_Rappel = $Date_Rappel;
                  }


                  function getReference() {
                    return $this->Reference;
                  }
                  function getDescription() {
                    return $this->Description;
                  }
                  function getDate_creation() {
                    return $this->Date_creation;
                  }
                  function getDate_Exp() {
                    return $this->Date_Exp;
                  }
                  function getDate_Rappel() {
                    return $this->Date_Rappel;
                  }


                 
                  function setReference($a) {
                    $this->Reference=$a;
                  }
                  function setDescription($a) {
                     $this->Description=$a;
                  }
                  function setDate_creation($a) {
                    $this->Date_creation=$a;
                  }
                  function setDate_Exp($a) {
                    $this->Date_Exp=$a;
                  }
                  function setDate_Rappel($a) {
                    $this->Date_Rappel=$a;
                  }

                  function create() {
                    
                    include "connection.php";
                  
                    $sql="INSERT INTO Materiel (Reference, Description, Date_creation, Date_Exp, Date_Rappel)  VALUES (:ref, :Descrip, :date_creat, :date_exp, :date_rapl)";
                    $stmt=$connex->prepare($sql);
                  

                    $stmt->bindParam(":ref", $_SESSION["Ref_mat"]);
                    $stmt->bindParam(":Descrip", $_SESSION['Description_mat']);
                    $stmt->bindParam(":date_creat", $_SESSION['date_creation']);
                    $stmt->bindParam(":date_exp", $_SESSION['date_exp']);
                    $stmt->bindParam(":date_rapl", $_SESSION['date_rappel']);
        
                  
                    $stmt->execute();
                   
                }
            
                
                public static function retrieve($connex, $id) {
                    try {
                        $stmt = $connex->prepare("SELECT * FROM Materiel WHERE ID_Materiel = :id");
                        $stmt->bindparam(":id", $id);
                        $stmt->execute();
            
                        
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($result) {
                            return new Materiel($result['ID_Materiel'], $result['Reference'], $result['Description'], $result['Date_creation'], $result['Date_Exp'], $result['Date_Rappel']);
                        } else {
                            return null; 
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                        return null;
                    }
                }
            
                
                public function update($connex) {
                    try {
                        $stmt = $connex->prepare("UPDATE Materiel SET Reference = :ref, Description = :Descrip, Date_creation = :date_creat, Date_Exp = :date_exp, Date_Rappel = :date_rapl WHERE ID_Materiel = :id_Mat");
            
                        
                        $stmt->bindparam(":id_Mat", $this->ID_Materiel);
                        $stmt->bindparam(":ref", $this->Reference);
                        $stmt->bindparam(":Descrip", $this->Description);
                        $stmt->bindparam(":date_creat", $this->Date_creation);
                        $stmt->bindparam(":date_exp", $this->Date_Exp);
                        $stmt->bindparam(":date_rapl", $this->Date_Rappel);
            
                      
                        return $stmt->execute();
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                        return false;
                    }
                }
            
               
                public static function delete($connex, $id) {
                    try {
                        $stmt = $connex->prepare("DELETE FROM Materiel WHERE ID_Materiel = :id");
                        $stmt->bindparam(":id", $id);
            
                      
                        return $stmt->execute();
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                        return false;
                    }
                }
                
        }


        class Document{
                private $ID_Document;
                private $Reference_doc;
                private $Description_doc;
                private $Date_creation_doc;
                private $Date_Exp_doc;
                private $Date_Rappel_doc;

                function __construct($ID_Document, $Reference_doc, $Description_doc, $Date_creation_doc, $Date_Exp_doc, $Date_Rappel_doc) {
                    $this->ID_Document = $ID_Document;
                    $this->Reference_doc = $Reference_doc;
                    $this->Description_doc = $Description_doc;
                    $this->Date_creation_doc = $Date_creation_doc;
                    $this->Date_Exp_doc = $Date_Exp_doc;
                    $this->Date_Rappel_doc = $Date_Rappel_doc;
                  }


                  function getID_Document() {
                    return $this->ID_Document;
                  }
                  function getReference_doc() {
                    return $this->Reference_doc;
                  }
                  function getDescription_doc() {
                    return $this->Description_doc;
                  }
                  function getDate_creation_doc() {
                    return $this->Date_creation_doc;
                  }
                  function getDate_Exp_doc() {
                    return $this->Date_Exp_doc;
                  }
                  function getDate_Rappel_doc() {
                    return $this->Date_Rappel_doc;
                  }


                  function setID_Document($a) {
                    $this->ID_Document=$a;
                  }
                  function setReference_doc($a) {
                    $this->Reference_doc=$a;
                  }
                  function setDescription_doc($a) {
                     $this->Description_doc=$a;
                  }
                  function setDate_creation_doc($a) {
                    $this->Date_creation_doc=$a;
                  }
                  function setDate_Exp_doc($a) {
                    $this->Date_Exp_doc=$a;
                  }
                  function setDate_Rappel_doc($a) {
                    $this->Date_Rappel_doc=$a;
                  }

                  //Methode CRUD //Class DAO
                  public function retrieve(){
                    
                  }
                  public function create(){

                  }
                  public function update(){

                  }
                  public function delete(){

                  }
                
        }

?>