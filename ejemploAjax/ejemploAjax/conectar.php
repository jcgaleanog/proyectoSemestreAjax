<?php
$link = mysqli_connect("192.168.76.137","web","web","ejemplo");
if(!$link )
{
  exit("No se pudo establecer la conexión");
  mysqli_error();
 }
/*
if(!mysqli_select_db("ejemplo",$link))
{
  	exit("No se pudo abrir la base de datos");
}
*/

?>
