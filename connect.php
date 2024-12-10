<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db='voyage';
    
   $connexion = new mysqli($host, $username, $password, $db); 
    if(!$connexion){
        die(mysqli_error($connexion));
    }
?>