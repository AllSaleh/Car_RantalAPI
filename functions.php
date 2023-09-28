<?php 


function protection($request){
    return htmlspecialchars(strip_tags($_POST[$request]));
}

function getprotection($request){
   return htmlspecialchars(strip_tags($_GET[$request]));
}
// function updateprotection($request){
//    return htmlspecialchars(strip_tags($_D[$request]));
// }

define('MB',1048576);
function uploadimage($imagerequset,$folder){
   global $msError;

 $imagename=rand(1,50000).$_FILES[$imagerequset]['name'];
 $imagetmp=$_FILES[$imagerequset]['tmp_name'];
 $imagesize=$_FILES[$imagerequset]['size'];


$enablextion   =array('png','jpg','gif','jpeg');
$exlodimage    =explode('.',$imagename);
$extintion      =end($exlodimage);
$extintion      =strtolower($extintion);


if(!empty($imagename) && !in_array($extintion,  $enablextion)){
   $msError[]='ExError';
}
if($imagesize > 10* MB){
   $msError[]='size';
}
if(empty($msError)){
   move_uploaded_file($imagetmp,$folder .$imagename);
   return $imagename;
}
else{
  return 'faild';
}
}
function DeletFile($path,$imagename){
if(file_exists($path."/".$imagename)){
   unlink($path."/".$imagename);
   echo 'done deleted image from server';
}
else{
   echo 'filed delete image from server';
}

}

?>