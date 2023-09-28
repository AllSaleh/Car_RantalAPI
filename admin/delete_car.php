<?php

include '../contect.php';

$car_id=protection('id');
$imagename=protection('imagename');


$stm=$conne->prepare('DELETE FROM `cars` WHERE `car_id`=?');

$stm->execute(array($car_id));

$count=$stm->rowCount();
if($count>0){

        DeletFile('../carimages',$imagename);


    echo json_encode(array("status"=> 'sucss'));
}
else{
    echo json_encode(array('status'=>'filed'));
}




?>