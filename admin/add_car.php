<?php


include "../contect.php";



$car_name=protection('name');
$car_dis=protection('discription');
$carimae=uploadimage('file','../carimages/');
$car_price=protection('price');

$car_rental=protection('rental');


if($carimae!='faild'){
$stm=$conne->prepare('INSERT INTO `cars`(`car_name`, `car_discription`, `car_image`, `car_price`, `car_resev`, `car_rental`) VALUES (?,?,?,?,0,?)');

$stm->execute(array($car_name,$car_dis,$carimae,$car_price,$car_rental));

$count=$stm->rowCount();
if($count>0){


    echo json_encode(array('status'=>'sucss'));
}
else{
    echo json_encode(array('status'=>'filed'));
}

}
else{
    echo json_encode(array("status" => 'filed'));
}


?>