<?php

 include '../../contect.php';

$rental=protection('rental');

$stm=$conne->prepare('SELECT * FROM `cars` WHERE `car_rental`=?');
$stm->execute(array($rental));
$count=$stm->rowCount();
$data=$stm->fetchAll(PDO::FETCH_ASSOC);


$count=$stm->rowCount();
if($count>0){


    echo json_encode(array("status"=> 'sucss',"data" => $data));
}
else{
    echo json_encode(array('status'=>'filed'));
}






?>