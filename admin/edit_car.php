<?php

include '../contect.php';


$car_id=protection('id');
$car_dis=protection('dis');
$car_price=protection('price');

$stm=$conne->prepare('UPDATE `cars` SET `car_discription`=? ,`car_price`=? WHERE `car_id`=?');
$stm->execute(array($car_dis,$car_price,$car_id));

$count=$stm->rowCount();
if($count>0){


    echo json_encode(array('status'=>'sucss'));
}
else{
    echo json_encode(array('status'=>'filed'));
}
?>