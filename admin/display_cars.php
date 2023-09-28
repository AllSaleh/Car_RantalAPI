<?php



include '../contect.php';


$stm=$conne->prepare('SELECT * FROM cars');
$stm->execute();

$data=$stm->fetchAll(PDO::FETCH_ASSOC);


$count=$stm->rowCount();
if($count>0){


    echo json_encode(array("status"=> 'sucss',"data" => $data));
}
else{
    echo json_encode(array('status'=>'filed'));
}

?>