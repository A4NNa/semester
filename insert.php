<?php
$r = $_POST['roll_no'];
$c = $_POST['cell'];
$m = $_POST['mail'];
$server_ip = "localhost";
$user_name = "admin";
$password = "King.cobra1";
$d_base = "class";
$link = new mysqli($server_ip,$user_name,$password,$d_base);
$insert_qry = "INSERT INTO section ('roll','cell','mail') VALUES ($r,$c,$m)"; 
if($insert_qry==TRUE)
{
echo "Insertion Successfull !"
}
else
{
echo "Try again, YOU CAN DO IT !!";
}
?>