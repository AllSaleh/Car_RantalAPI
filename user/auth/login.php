<?php

include '../../contect.php';
$username=protection('username');
$password=protection('password');

$stm=$conne->prepare('SELECT * FROM `users`WHERE `username`=? AND `password`=?');

$stm->execute(array($username,$password));
$data=$stm->fetch(PDO::FETCH_ASSOC);


$count=$stm->rowCount();
if($count>0){


    echo json_encode(array('status'=>'sucss',"data"=> $data));
}
else{
    echo json_encode(array('status'=>'filed'));
}





?>