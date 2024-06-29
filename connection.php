<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost','root','','carproject');
    if(!$con)
    {
        echo 'veuillez vérifier votre connexion à la base de données';
    }







?>