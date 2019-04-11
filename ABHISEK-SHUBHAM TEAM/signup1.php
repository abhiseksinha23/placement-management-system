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
$flag= 0;
$message="";

if(empty($name))
{
	$_SESSION['message'][0]="Name is Required";
	$flag=1;
}
else if(empty($email))
	{
	$_SESSION['message'][1]="Email is Required";
	$flag=1;
}
else if(empty($pass))
	{
	$_SESSION['message'][2]="Password is Required";
	$flag=1;
}
else if(empty($cnt))
	{
	$_SESSION['message'][3]="contact is Required";
	$flag=1;
}
else if(empty($roll))
	{
	$_SESSION['message'][3]="roll is Required";
	$flag=1;
}
else if(empty($dob))
	{
	$_SESSION['message'][3]="dob is Required";
	$flag=1;
}
else if(empty($branch))
	{
	$_SESSION['message'][3]="branch is Required";
	$flag=1;
}
else if(empty($year))
	{
	$_SESSION['message'][3]="year is Required";
	$flag=1;
}
if ($flag!=0)
{
	
	header('Location: http://localhost/placement/signup.php');
	
}
else
{
	$sql="INSERT INTO student(name, roll, email, password, contact, dob, branch, year) VALUES(' ".$name." ',' ".$roll." ',' ".$email." ',' ".$pass." ',' ".$cnt." ',' ".$dob." ', ' ".$branch." ',' ".$year." ')";
	if($con->query($sql))
		{
			echo"sign up done, click here to go to dashboard";
	    header('Location: http://localhost/placement/login.php');
        }

	else
		echo $con->error;
}

?>