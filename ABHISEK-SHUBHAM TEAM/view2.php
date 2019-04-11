
<?php
include('dbcon.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<head>
  <meta charset="utf-8">
  
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <linkrel="icon" href="2.ICO">
  <style type="text/css">
body{
    background-image: URL("photo/5.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    
          }
  </style>
          </head>

        

<body style="text-align:center;">

      <div class="header" style="background-color: black;">
      <img src="download.jpg" style="float:left; width:85px ; height: 86px; padding-left: 5px;">
      <h1 style="color: white;text-align: center;padding-top: 20px; padding-bottom: 18px;padding-left: 10px;padding-right: 5px;">CSE DEPARTMENT
  <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="adminpanel.php#section3">GO BACK</a></button>
</h1>
</div>
  

    <br><br>
<div class="container-fluid">
  <table class="table" width='60%'  align="center" cellpadding="4px" style="text-align:center; width: 75%; padding: 4px; color: blue; font-size: 20px;">
  
      <b> 

<?php 
  if(isset($_POST)&& !empty($_POST))
  {
$user = $_POST['reg'];
$sql1 = "SELECT * FROM student WHERE reg = '".$user."'";

$result1 = $con->query($sql1);


if($result1->num_rows > 0)
{
$row = $result1->fetch_assoc(); 
$_SESSION['user'] =  $row;
echo"<br>";
$sql =  "SELECT * FROM student where reg = '".$user."'";
          $result = $con->query($sql);

         if($result->num_rows > 0)
{
              echo "<tr>";
           //$image_src = $row['pic1'];
             //echo  "<td>"."<img  src= '$image_src' height='200' width='350'>"."</td>";
             //echo  "<td>".'<img height="200" width="350" src="data:seller/jpeg;base64,'.base64_encode($row['pic1']).' ">'."</td>";
            // echo  "<td>".'<img height="200" width="350" src="data:seller;base64,'.base64_encode($row['pic1']).' ">'."</td>";
               echo "<td>"."NAME :-"."</td>";echo "<td>".$row['name']."</td>"; echo "</tr>";
           echo "<tr>"; echo "<td>"."REGISTRATION NUMBER :- "."</td>";  echo "<td>".$row['reg']."</td>"; echo "</tr>";

         echo "<tr>";   echo "<td>"."FATHER'S NAME:-"."</td>"; echo "<td>".$row['father']."</td>"; echo "</tr>";
          echo "<tr>";  echo "<td>"."MOTHER'S NAME :-"."</td>";  echo "<td>".$row['mother']."</td>"; echo "</tr>";
            echo "<tr>"; echo "<td>"."DATE OF BIRTH :-"."</td>";  echo "<td>".$row['dob']."</td>";
         echo "<tr>";  echo "<td>"."ADDRESS :-"."</td>";  echo "<td>".$row['address']."</td>"; echo "</tr>";
           
           echo "<tr>";echo "<td>"."MOBILE NO. :-"."</td>";  echo "<td>".$row['mob']."</td>"; echo "</tr>";
           echo "<tr>";  echo "<td>"."EMAIL :-"."</td>";echo "<td>".$row['email']."</td>";  echo "</tr>";
             echo "<tr>"; echo "<td>"."GENDER :-"."</td>"; echo "<td>".$row['gen']."</td>"; echo "</tr>";
           echo "<tr>"; echo "<td>"."SEMESTER :-"."</td>"; echo "<td>".$row['sem']."</td>"; echo "</tr>";
         echo "<tr>";   echo "<td>"."CGPA :-"."</td>"; echo "<td>".$row['cgpa']."</td>"; echo "</tr>";
        
          
             echo "</tr>";    
        }
    
        }

}

else
{
echo"<br><br>";
echo "Invalid username or password";


}

        ?>
    </b>
  </table>
</div>
</div>
    <style>
            table,th{
                border: 2px solid black;
               
               
            }
             td{
                border: 2px solid black;
                column-width: 3000px;
               
            }
            tr{
             
              color:black;
            }

    </style><br><br>
</div>
</body>

</html>

