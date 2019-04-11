

<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
  
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <linkrel="icon" href="2.ICO">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
    <meta charset="utf-8">
    <style media="screen">
      body,html{
        height: 100%;
        margin: 0;

      }
      .BG{
        background-image: URL("photo/4.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <title></title>
  </head>


  <body >

    <DIV class="BG">
 <div class="header" >
      <img src="download.jpg" style="float:left; width:80px ; height: 78px; padding-left: 5px;">
      <h1 style="color: white;text-align: center;padding-top: 20px; padding-bottom: 18px;padding-left: 10px;padding-right: 10px;">CHECK YOUR ELIGIBILITIES
  <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="home.php">GO BACK</a></button></h1>
</div>
  
      <h1 style="text-align:center; color:#51e3d4; ">
  <br>   Enter Your Details
      </h1>
      <div class="container" style="text-align:center; color:white; margin-top:20px;">
          <table align="center">
      <form class="" action="viewall.php" method="post" onsubmit = "return validate()" enctype="multipart/form-data">
      
          <tD>
            <br><br><br>
          </tD>
          <tr >
            <td style="text-align:left;color:white;"><b>Branch</b></td>
            <td><input type="text" name="branch" value=""  ></td>
          </tr>
          <tr>
            <td  style="text-align:left;color:white; "><b>CGPA</b></td>
            <td><input type="text" name="cg" value=""> </td>
          </tr>
          <tr style="text-align:right;">

            <td><input type="submit" name="" value="submit"  style="text-align:center;background-color:#1d5464; color:white; margin-top:20px;"></td>
            <td style="text-align:center;"><input type="reset" name="" value="Reset"  style="text-align:center;background-color:#1d5464; color:white; margin-top:20px;"></td>
          </tr>
        

      </form>
      </table>
      </div>

    </DIV>
    <script type="text/javascript">
    function validate()
{
var flag = 0;

var email = document.getElementById('branch').value;
var pass =  document.getElementById('cg').value;

if(email=='')
{
alert("Enter your Branch");
flag = 1;
}
else if(pass=='')
{
alert("Enter your CGPA");
flag = 1;
}
else
flag =0;

if(flag==0)
return true;
else
return false;

}
</script>
  </body>
</html>
<?php

if(isset($_POST) &&! empty($_POST))
{
$name =  $_POST['email'];
$address = $_POST['password'];


if(empty($name))
echo "Name is empty";
else
echo $name;
echo"<br>";

if(empty($address))
echo "Address is empty";
else
echo $address;
echo"<br>";


}
?>