<?php 
    $con = mysqli_connect("localhost","root","","ecole_sup");
    if(!$con){
        echo "vous n'etes pas connecté a la base de donné";
    }
?>