
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
   
      <h1 style="color: white;text-align: center;padding-top: 25px; padding-bottom: 25px;padding-left: 10px;padding-right: 5px;">PLACEMENT MANAGEMENT PORTAL
  <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="adminpanel.php#section2">GO BACK</a></button>
</h1>
</div>
  <br>
    <h2 style="text-align: center;"><b>  <u>Students details</u></b></h2>
    <table width='100%'>
        <tr bgcolor='lightblue'>
              
           
              
               <td><b>NAME</b></td>
             <td><b>REGISTRATION No.</b></td>
             <td><b>BRANCH</b></td>
             <td><b>YEAR</b></td>
             <td><b>CGPA</b></td>
             <td><b>EMAIL</b></td>
              <td><b>MOBILE No.</b></td>
            

        </tr>

        <?php 

         $sql =  "SELECT   * FROM student ORDER BY roll ASC";
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
           echo "<td>".$row['roll']."</td>"; 
        echo "<td>".$row['branch']."</td>";
             echo "<td>".$row['year']."</td>";
            echo "<td>".$row['cgpa']."</td>";
               echo "<td>".$row['email']."</td>";
           echo "<td>".$row['contact']."</td>";
          
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

