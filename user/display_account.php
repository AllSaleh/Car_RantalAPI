<?php

include '../contect.php';

$id=protection('id');

$stm=$conne->prepare('SELECT * FROM `users` WHERE `id`=?');
$stm->execute(array($id));

$data=$stm->fetch(PDO::FETCH_ASSOC);

$count=$stm->rowCount();
if($count>0){


    echo json_encode(array('status'=>'sucss',"data" => $data));
}
else{
    echo json_encode(array('status'=>'filed'));
}


?>