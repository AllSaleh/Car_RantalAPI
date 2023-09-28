<?php

 include '../contect.php';

$id=protection('id');

$stm=$conne->prepare('DELETE FROM `users` WHERE `id`=?');
$stm->execute(array($id));

$count=$stm->rowCount();
if($count>0){
   
    
    echo json_encode(array("status"=> 'sucss'));
}
else{
    echo json_encode(array("status" => 'filed'));
}





?>