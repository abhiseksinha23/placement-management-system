
<?php
include('dbcon.php');
?>

<html>
<head>
	<html>
<head>
  <style type="text/css">
body{
   
      background-color: #adff2f ;
    }</style>
          </head>
          <body>
</head>

<body>
  <div>
   <div class="header">
     
      <h1 style="color: white;text-align: center;padding-top: 25px; padding-bottom: 25px;padding-left: 10px;padding-right: 5px;">PLACEMENT MANAGEMENT
  <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="adminpanel.php#section3">GO BACK</a></button>
</h1>
</div>
  <br>
    <h2 style="text-align: center;"><b>  <u>COMPANY details</u></b></h2>
    <table width='100%'>
        <tr bgcolor='lightblue'>
              
           
              
               <td><b>COMPANY'S NAME</b></td>
             <td><b>REGISTRATION No.</b></td>
             <td><b>ADDRESS</b></td>
             <td><b>TYPE</b></td>
             <td><b>CONTACT</b></td>
             <td><b>EMAIL</b></td>
              <td><b>PACKAGE</b></td>
            

        </tr>

        <?php 

         $sql =  "SELECT   name, reg, address, email, type, contact, package FROM company ORDER BY reg ASC";
          $result = $con->query($sql);

         if($result->num_rows > 0)
{
        while($row = $result->fetch_assoc()) {         
          // $image_src = $row['photo'];
           //  echo  "<td>"."<img  src= '$image_src' height='200' width='350'>"."</td>";
             //echo  "<td>".'<img height="200" width="350" src="data:seller/jpeg;base64,'.base64_encode($row['pic1']).' ">'."</td>";
            // echo  "<td>".'<img height="200" width="350" src="data:seller;base64,'.base64_encode($row['pic1']).' ">'."</td>";
            
              echo "<tr>";
          
         echo "<td>".$row['name']."</td>";
           echo "<td>".$row['reg']."</td>"; 
        echo "<td>".$row['address']."</td>";
             echo "<td>".$row['type']."</td>";
            echo "<td>".$row['contact']."</td>";
               echo "<td>".$row['email']."</td>";
           echo "<td>".$row['package']."</td>";
          
             echo "</tr>";    
  
        }

}
        ?>
    </table>
    <style>
            table,th{
                border: 1px solid black;
               
               
            }
             td{
                border: 1px solid black;
                column-width: 3000px;
               
            }

    </style><br><br>
  <!-- /. PAGE INNER  -->
</div>
</body><!-- /. PAGE WRAPPER  -->


</html>

