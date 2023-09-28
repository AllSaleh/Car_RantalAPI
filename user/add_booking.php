<?php
include '../contect.php';

$user_id=protection('user_id');
$car_id=protection('car_id');
$days=protection('days');
$cost=protection('cost');
$stm=$conne->prepare('INSERT INTO `orders`(`id_user`, `id_car`,`days`, `cost`) VALUES (?,?,?,?); UPDATE `cars` SET `car_resev`=1 WHERE `car_id`=? ');


$stm->execute(array($user_id,$car_id,$days,$cost,$car_id));

$count=$stm->rowCount();
if($count>0){
    echo json_encode( array("status"=> 'sucss'));
}
else{
    echo json_encode(array("status"=>"filed"));
}






?>