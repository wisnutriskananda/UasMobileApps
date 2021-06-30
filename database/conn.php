<?php

$connect = new mysqli("localhost","root","","entitas_customer");

if($connect) {
 echo "Connection Success";
}else{
 echo "Connection Failed";
 exit();
}