<?php

$server_name="localhost";
$user_name="root";
$password="";
$db_name="exam";

$conn=mysqli_connect($server_name,$user_name,$password,$db_name);

if(!$conn){
    echo "The database not connected!!";
}
?>