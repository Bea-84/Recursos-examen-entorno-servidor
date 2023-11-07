<?php

//Inicio la variable
$num=0;

//Si la variable no existe, la creo 

if(!isset($_COOKIE["numero"])){
setcookie("numero","0",time()+(86400*30),"/");
}else{
  $num=$_COOKIE["numero"];
}

//Si la variable existe sumar 1
if(isset($_GET["c"])){
  $num++;
  setcookie("numero",$num,time()+(86400*30),"/");
}

echo $num;

?>

