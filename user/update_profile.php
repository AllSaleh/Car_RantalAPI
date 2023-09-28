<?php

include '../contect.php';
$username=protection('username');
$email=protection('email');
$password=protection('password');
$phone=protection('phone');
//$image=protection('image');
$id=protection('id');



$stm=$conne->prepare('UPDATE `users` SET `username`=?,`email`=?,`password`=?,`phone`=?  WHERE `id`=?');

$stm->execute(array($username,$email,$password,$phone,$id));

$count=$stm->rowCount();
if($count>0){
    echo json_encode(array("status"=> 'sucss'));
}
else{
    echo json_encode(array("status" => 'filed'));
}

?>