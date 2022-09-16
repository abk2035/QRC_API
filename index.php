<?php 
require_once('config/DB.php');
require_once('models/Etudiant.php');
//instantiate database & connect
$database = new Database();
$connect = $database->connect();
// new etudiant model
$etudiant = new Etudiant($connect);
$filiere = $etudiant->getFiliere();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSPD QR Code gen </title>
</head>
<body style="display:flex ; margin: 0px; padding: 0px; align-items:bottom; justify-content: center; background:#8ae;">
      <main style="display:flex ;  align-items : center; width: 40%;
       justify-content: center; background: white; flex-direction :column ; min-height: 200px ; padding-bottom:30px;">
         <img src="image/polytechlogo.png" />
         <h1>  ENSPD QRC GEN  </h1>
          <form action="" method="POST" style="display:flex ; flex-direction:column;  ">
               <div style="margin-bottom : 10px; display:flex ; flex-direction:column;">
                    <label style=""> Choisir le Cursus </label>
                    <select  name='cursus' style="border:1px solid gray; padding:3px ; border-radius:4px;">
                        <option />
                        <option value="Ingenieur">Ingenieur</option>
                        <option value="Master Professionnel">Master Professionnel</option>
                        <option value="Master Recherche">Master Recherche</option>
                        <option value="Science de l'Ingenieur">Science de l'Ingenieur</option>
                        <option value="FI2">FI2</option>
                    </select>
                </div>
                <div style="margin-bottom : 20px; display:flex ; flex-direction:column;">
                <label style=""> Choisir une filiere </label>
                    <select  name='filiere' style="border:1px solid gray; padding:3px ; border-radius:4px;">
                        <option />
                       <?php foreach($filiere as $row)
                       {echo('<option value='.$row['etud_filiere'].'>'.$row['etud_filiere'].'</option>');} ?>    
                    </select>
                </div>
             <input type="submit" value="Générer" name="submit" style=" background:blue ; border-radius :4px; width: 200px;
               margin : auto;border:none ; height:35px ; color:#fff "/>  
          </form>  
          <div><?php if(isset($_POST['submit'])) require_once('QRcode.php');?></div>
     </main>
     <script type="text\javascript">
      
     </script>
</body>
</html>