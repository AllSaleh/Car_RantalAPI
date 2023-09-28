<?php


include '../../contect.php';

$username=protection('username');
$name=protection('name');
$email=protection('email');
$password=protection('password');
$phone=protection('phone');


$image=uploadimage('file',"../../usersimages/");


if($image!='faild'){
$stm=$conne->prepare('INSERT INTO `users`(`username`,`name`, `email`, `password`, `phone`, `user_image`) VALUES (?,?,?,?,?,?)');

$stm->execute(array($username,$name,$email,$password,$phone,$image));

$count=$stm->rowCount();
if($count>0){
    echo json_encode( array("status"=> 'sucss'));
}
else{
    echo json_encode(array("status"=>"filed"));
}
}

else{
    echo json_encode(array("status"=>"filed"));
}
?>