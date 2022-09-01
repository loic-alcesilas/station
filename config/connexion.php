<?php 

//sert a renvoyer les erreurs et message erreur
try {

     //acces a la BDD
     $access =new pdo("mysql:host=localhost;dbname=stationmeteo;charset=utf8", "root", "");

     $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
} catch (Exception $e){
    $e->getMessage();
}
   

?>