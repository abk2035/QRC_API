<?php

use LDAP\Result;

class Etudiant {
    //connection property
    private $connect;

    //properties
    public $matricule ;
    public $nom ;
    public $prenom ;

    // array of students
    public $etudiants ;

    public function __construct($db){
        $this->connect = $db ;
       
    }

    public function getEtudiants(){
        // query 
        $query = 'SELECT * FROM etudiant';
        $stmt = $this->connect->prepare($query);
        $stmt->execute(); 
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($result){
                $this -> etudiants = $result ;
            }else{
                echo('no students...');
            }
        return $this->etudiants ;
    }

    public function getFiliere(){
        // query 
        $query = 'SELECT DISTINCT etud_filiere FROM etudiant' ;
        $stmt = $this->connect->prepare($query);
        $stmt->execute(); 
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($result){
                return $result ;
            }else{
                echo('no students...');
            }
    }
      
    
   
}
?>