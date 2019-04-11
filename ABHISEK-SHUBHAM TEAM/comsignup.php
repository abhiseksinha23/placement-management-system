<?php
session_start();
include('dbcon.php');
if(isset($_POST)&&!empty($_POST))
//echo "<pre>";print_r($_POST);echo "</pre>";

$name = addslashes(strip_tags($_POST['name']));
$reg = addslashes(strip_tags($_POST['reg']));
$email = addslashes(strip_tags($_POST['email']));
$pass =strip_tags($_POST['password']);
$cnt = strip_tags($_POST['contact']);
$type = strip_tags($_POST['type']);
$add =strip_tags($_POST['add']);
$pack =strip_tags($_POST['package']);
$cgpa =strip_tags($_POST['cgpar']);
$job =strip_tags($_POST['job']);
$branch =strip_tags($_POST['br']);
$flag= 0;
$message="";


	$sql="INSERT INTO company(name, reg,email,password, contact, type,address, package, cgpar, job, branch) VALUES(' ".$name." ',' ".$reg." ',' ".$email." ',' ".$pass." ',' ".$cnt." ',' ".$type." ', ' ".$add." ',' ".$pack." ',' ".$cgpa." ',' ".$job." ',' ".$br." ')";
	if($con->query($sql))
		{
			echo"sign up done, click here to go to dashboard";
	    header('Location: http://localhost/placement/companylogin.php');
        }

	else
		echo $con->error;


?>