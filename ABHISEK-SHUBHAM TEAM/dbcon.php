 <?php
$server="localhost";
$user="root";
$password="";
$database="placement";
$con=new mysqli($server,$user,$password,$database);

if($con->connect_error)
	die($con->connect_error);
?>