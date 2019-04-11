<?php

include('dbcon.php');
?>
<html>
<head>
   <style>
                 img{
                  float : left ;
           }
    body{
      background-color: #d3d3d3 ;
    }
              </style>
  </head>
      <body>
            <div class="header" >
      <img src="download.jpg" style="float:left; width:80px ; height: 78px; padding-left: 5px;">
      <h1 style="color: white;text-align: center;padding-top: 20px; padding-bottom: 18px;padding-left: 10px;padding-right: 10px;">CSE DEPARTMENT
  <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="adminpanel.php">GO BACK</a></button></h1>
</div>
<?php

include('dbcon.php');


if(isset($_POST) &&! empty($_POST))
$email = addslashes( $_POST['regno']);

//$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
//$image_name = addslashes($_FILES['image']['name']);

//$target_file = "uploaded pics/".$_FILES['fileupload' ]['name'];
//move_uploaded_file($temp_file1 , $target_file1);

/*$name = $_FILES['image']['name'];
$target = "uploadedstaff/";
$target_file = $target . basename($_FILES["image"]["name"]);
$imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$extension_arr = array("jpg", "jpeg", "png", "gif");
if(in_array($imagefiletype, $extension_arr)){

$image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
$image = 'data:seller/'.$imagefiletype.';base64,'.$image_base64;

move_uploaded_file($_FILES['image']['tmp_name'], $target.$name);
}*/
$message = "";
$flag = 0;




if(empty($email)){
$message = $message .  "Registraion Number is required"." <br>";
$flag = 1;
}




 if($flag!=0)
  {
   $_SESSION['message'] =  $message;
    header("Location:http://localhost/placement/adminpanel.php");
  }
else
{

  $sql = "DELETE FROM student WHERE reg ='".$email."'";
if($con->query($sql)){
echo"<br>";
			echo"<br>";
			
              echo"<h3><b>DELETED.</b></h3>";
           echo"<h3><b>Go back to modify/delete more Details.</b></h3>";
}
else
echo $con->error;

echo "<br>";
//if($con->query($sql1)){
//echo"<br>";
    //  echo"<br>";
      
          //    echo"<h3><b>Pic uploaded </b></h3>";
   
//}
//else
//echo $con->error;
}
?>

			</body>
			</html>