<?php

$dbn="mysql:host=localhost;dbname=car_rental";
$user="root";
$pass="";
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" //for prividing arabick languge
);
try {
    $conne= new PDO($dbn, $user, $pass,$option);
    $conne->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   include "functions.php";
} catch (PDOException $e) {
    echo $e->getMessage();

}




?>