<center>
<br><br>
<br><br>
<br><br>
<br><br>
<?php
         session_start();
        
         include('dbcon.php');
        if(isset($_POST)&& !empty($_POST))
  {
// echo"<pre>";print_r($_POST);exit;

  $user = $_POST['email'];
  $pass =$_POST['password'];

$sql = "SELECT * FROM student WHERE email = '".$user."' AND password = '". $pass."'";


$result = $con->query($sql);
if($result->num_rows > 0)
{
$row = $result->fetch_assoc(); 
$_SESSION['user'] =  $row;
echo " Welcome to your profile-".$_SESSION['user']['name'];
//echo"<pre>";print_r($_SESSION['user']);exit;
header('Location:http://localhost/placement/viewall.php');



}
else
{
echo "Invalid username or password";
}
}


?>

</center>