<?php

include '../contect.php';

$id=getprotection('id');




$stm=$conne->prepare('SELECT users.username,users.name,orders.cost,orders.days,
cars.car_name,cars.car_discription,cars.car_image,cars.car_rental,cars.car_price
FROM users INNER JOIN orders ON orders.id_user=users.id 
INNER JOIN cars ON cars.car_id=orders.id_car WHERE users.id=?');
$stm->execute(array($id));



$data=$stm->fetchAll(PDO::FETCH_ASSOC);

$count=$stm->rowCount();
if($count>0){


    echo json_encode(array('status'=>'sucss',"data" => $data));
}
else{
    echo json_encode(array('status'=>'filed'));
}





?>