<?php

$server="localhost";
$username="root";
$password="";
$dbname="polyship";

$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("Connection error");
}
// else{
//     echo "Connection Successfull...";
// }

?>