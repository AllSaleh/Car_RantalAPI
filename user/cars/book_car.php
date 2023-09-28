<?php


 include '../../contect.php';

 $userid=protection('userid');
 $carid=protection('carid');
 $from=protection('from');
 $to=protection('to');
 $cost=protection('cost');



 $stm=$conne->prepare('INSERT INTO `orders`(`id_user`, `id_car`, `order_time_from`, `order_time_to`, `cost`) VALUES (?,?,?,?,?);UPDATE `cars` SET `car_resev`=1 WHERE car_id=?');
 //$stm=$conne->prepare('UPDATE `cars` SET `car_resev`=0 WHERE car_id=?');

 $stm->execute(array($userid,$carid,$from,$to,$cost,$carid));

 $count=$stm->rowCount();
if($count>0){


    echo json_encode(array('status'=>'sucss'));
}
else{
    echo json_encode(array('status'=>'filed'));
}

?>