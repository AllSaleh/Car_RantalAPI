<?php


include "../contect.php";
$adminname=protection('name');
$adminpass=protection('password');


$stm=$conne->prepare('SELECT * FROM `admin` WHERE `admin_name`=? AND `admin_pass`=? ');
$stm->execute(array($adminname,$adminpass));



$count=$stm->rowCount();
if($count>0){


    echo json_encode(array('status'=>'sucss'));
}
else{
    echo json_encode(array('status'=>'filed'));
}

?>