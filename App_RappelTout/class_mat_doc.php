<?php
        class Materiel{
                private $ID_Materiel;
                private $Reference;
                private $Description;
                private $Date_creation;
                private $Date_Exp;
                private $Date_Rappel;

                function __construct($ID_Materiel, $Reference, $Description, $Date_creation, $Date_Exp, $Date_Rappel) {
                    $this->ID_Materiel = $ID_Materiel;
                    $this->Reference = $Reference;
                    $this->Description = $Description;
                    $this->Date_creation = $Date_creation;
                    $this->Date_Exp = $Date_Exp;
                    $this->Date_Rappel = $Date_Rappel;
                  }


                  function getID_Materiel() {
                    return $this->ID_Materiel;
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


                  function setID_Materiel($a) {
                    $this->ID_Materiel=$a;
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
                
        }

?>