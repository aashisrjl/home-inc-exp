<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "home";

$conn= mysqli_connect($host,$username,$password,$dbname);

if(mysqli_connect_errno())
{
    die("Sorry! You got some error in connection");
}
?>