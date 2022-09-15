<?php 

//include file
require_once('config/DB.php');
require_once('models/Etudiant.php');
require_once('phpqrcode/qrlib.php');

 //instantiate database & connect
 $database = new Database();
 $connect = $database->connect();

 //get students from database
 $etudiant = new Etudiant($connect);
 $etudiants = $etudiant->getEtudiants();
 
 //where qrc code file is save 
 $tempDir = 'qrcfolder/';
 //QRC level
 $level = 'M';
 //QRC size
 $size = 3;
 //QRC padding 
 $padding =2 ;

 foreach($etudiants as $etudiant){
    $i = 1 ;
    // file name
    $filename = $etudiant['etud_nom'].$etudiant['etud_matricule'].'.png';
    //content of QRCode ;
    $codeContents = 'matricule: '.$etudiant['etud_matricule']."\n".'nom: '.$etudiant['etud_nom']."\n".'prenom: '.$etudiant['etud_prenom']."\n".
                    'filiere: '.$etudiant['etud_filiere']."\n".'mention: '.$etudiant['etud_mention']."\n".'session: '.$etudiant['etud_session'];
    //generating
    if(!file_exists($tempDir.$filename)){
        QRcode::png($codeContents,$tempDir.$filename,$level,$size,$padding);
    echo 'file generated';
    echo '<br />' ;
    }else{
        echo 'file already exist';
        echo '<br />' ;
    }

   if($i==count($etudiants)){ echo 'all files has generated !';
   } else { $i=$i++ ;}
}












?>