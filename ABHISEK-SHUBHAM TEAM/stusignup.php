<?php
session_start();
include('dbcon.php');
if(isset($_POST)&&!empty($_POST))
//echo "<pre>";print_r($_POST);echo "</pre>";

$name = addslashes(strip_tags($_POST['name']));
$roll = addslashes(strip_tags($_POST['roll']));
$email = addslashes(strip_tags($_POST['email']));
$pass =strip_tags($_POST['password']);
$cnt = strip_tags($_POST['contact']);
$dob = strip_tags($_POST['dob']);
$branch =strip_tags($_POST['branch']);
$year =strip_tags($_POST['year']);
$cg =strip_tags($_POST['cg']);
$flag= 0;
$message="";


	$sql="INSERT INTO student(name, roll, email, password, contact, dob, branch, year, cgpa) VALUES(' ".$name." ',' ".$roll." ',' ".$email." ',' ".$pass." ',' ".$cnt." ',' ".$dob." ', ' ".$branch." ',' ".$year." ',' ".$cg." ')";
	if($con->query($sql))
		{
			echo"sign up done, click here to go to dashboard";
	    header('Location: http://localhost/placement/studentlogin.php');
        }

	else
		echo $con->error;


?>