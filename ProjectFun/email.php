<?php
$to='darshan31597@gmail.com';
$subject='Testing email';
$body='Hello There';
$from='From: funtude@funtude.com';
if(mail($to,$subject,$body,$from))
{
    echo 'Jai Rama';
}
else echo 'Please Rama';
?>