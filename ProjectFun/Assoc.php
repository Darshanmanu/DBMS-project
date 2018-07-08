<?php
$array;
if(true)
{
$var1=array('Darshan','male','1997');
$array[0]=array();
$array[0]=$var1;
$var2=array('Hello','Darshan','How');
$array[1]=$var2;
}
echo $array[1][1];
?>