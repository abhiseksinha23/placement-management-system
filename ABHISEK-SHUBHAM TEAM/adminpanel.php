<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
    </script>
  <style>
    body {font-family: Arial;
    	background-color: black;}

    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }

body, html, .main {
  height: 100%;
}

section {
  min-height: 100%;
}

  table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 2px solid #ddd;
}

th, td {
text-align: left;
padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}


.back-to-top {
  position: fixed;
  display: none;
  background: #f82249;
  color: #fff;
  width: 40px;
  height: 40px;
  text-align: center;
  border-radius: 50px;
  right: 10px;
  bottom: 10px;
  transition: background 0.5s ease-in-out;
}

.back-to-top i {
  font-size: 15px;
  padding-top: 15px;
}

.back-to-top:focus {
  background: #e0072f;
  color: #fff;
  outline: none;
}

.back-to-top:hover {
  background: #e0072f;
  color: #fff;
}
</style>
  <title></title>
</head>

<body>
	    <div class="header" style="background-color: black;">
   
      <h1 style="color: white;text-align: center;padding-top: 20px; padding-bottom: 18px;padding-left: 10px;padding-right: 5px;">PLACEMENT MANAGEMENT PORTAL
  <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="adminlogin.php">LOGOUT</a></button>
</h1>
</div>
</div>
  <div class="admin" style=" background-image: URL('photo/4.jpg');
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;background-color:#fd5f00;height:100%;text-align:center;padding-bottom: 20px;">
 
<br /><br />
    <h1 style="text-align:center;font-size:32px;"><u><b><em>Admin Panel</em></b></u></h1>
    <section style="padding-top:10%; padding-bottom: 15%;">
      <button type="button" style="width:70px;height:25px;" name="button"> <a href="#section2">Company</a></button>
      <br> <br> <button type="button" name="button" style="width:70px;height:25px;"><a href="#section3">Student</a> </button>
  </div>
  <div class="main" id="section2" style="padding-bottom: 60px;">
  <div class="tab">
   
    <button class="tablinks" onclick="openCity(event, 'Delete')">Delete</button>
    <button class="tablinks" onclick="openCity(event, 'View')">View</button>

  </div>
  <script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>



  <!--Add faculty details of staff -->

  <div class="Staff" style=" background-image: URL('photo/18.jpg');
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;background-color:#5d50c6;text-align:center; height:100%">

      <section>

        <div id="Add" class="tabcontent">
          <h1 style="text-align:center">Add Faculty Details</h1>
       (If u leave any column empty, you will be redirected to this column, so be carefull and on successful submission u will be directed to next page).

          <div style="overflow-x:auto;">


            <form class="AddFaculty" action="signin5.php" method="post"  enctype="multipart/form-data">
              <table>
                <tr>
                  <td> <b>Name</b> </td>
                  <td> <input type="text" name="name" value=""> </td>
                </tr>
                <tr>
                  <td> <b> Designation </b> </td>
                  <td> <input type="text" name="desig" value=""> </td>
                </tr>
                <tr>
                  <td> <b> Address </b> </td>
                  <td> <textarea  id= "address"  cols="50" rows="3" name="address"></textarea></td>
                </tr>
                <tr>
                  <td> <b> Mobile No. </b> </td>
                  <td> <input type="text" name="mob" value=""> </td>
                </tr>
                <tr>
                  <td> <b>Email-Id</b> </td>
                  <td> <input type="email" name="email" value=""> </td>
                </tr>
                 <tr>
                  <td> <b>Gender</b> </td>
                  <td> <input type="text" name="gender" value=""> </td>
                </tr>
                <tr>
                  <td> <b>Date Of Birth(YYYY-MM-DD)</b> </td>
                  <td> <input type="text" name="dob" value=""> </td>
                </tr>
                 <tr>
                  <td> <b>B.Tech</b> </td>
                  <td> <input type="text" name="btech" value=""> </td>
                </tr>
                 <tr>
                  <td> <b>M.Tech</b> </td>
                  <td> <input type="text" name="mtech" value=""> </td>
                </tr>
                 <tr>
                  <td> <b>PHD</b> </td>
                  <td> <input type="text" name="phd" value=""> </td>
                </tr>
                <tr>
                  <td> <b>Specialization</b> </td>
                  <td>  <textarea  id= "special"  cols="50" rows="3" name="special"> </textarea></td>
                </tr>
                <tr>
                  <td> <b>Choose Profile image</b> </td>

                  <td> <input type="file" name="image" value=""> </td>
                </tr>
                <td></td>
                <td class="SubmitFaculty" style="cellPADDing:20%;">
                  <br>
                  <input type="submit" align="center" name="submit" value="Submit">
                  <input type="reset" name="reset" align="center" value="Reset">
                </td>
              </table>
            </form>
          </div>

        </div>

        <!--   delete class of staff -->
        <div id="Delete" class="tabcontent">


          <br>
          <div style="overflow-x:auto;">
            <form class="DeleteFaculty" action="delete1.php" method="post">


              <table>
                <th>
                <td>
                  <h3> <b> Delete COMPANY Details</b></h3>
                </td>

                </th>
                <tr>
                  <td> <b>Enter Email-Id</b> </td>
                  <td> <input type="email" name="email" value=""> </td>
                </tr>
                <tr>
                  <td style="colspan:1;">
                    <div class="SubmitdelFac" style="text-align:right;">
                      <br>
                      <input type="submit" name="Delete" value="Delete">
                  <td><br> <input type="reset" name="Reset" value="reset"></td>
          </div>
          </td>
          </tr>
          </table>
          </form>
        </div>


    </div>
    <!--   modify class of staff -->
    <div id="Modify" class="tabcontent">
      <h1 style="text-align:center">Modify Faculty Details</h1>(EMAIL ID and Image cannot be modified)
   (If u leave any column empty, you will be redirected to this column, so be carefull and on successful submission u will be directed to next page).


      <div style="overflow-x:auto;">
        <form class="ModifyFac" action="modify1.php" method="post">
          <table>
          	 <tr>
                  <td> <b>Email-Id</b> </td>
                  <td> <input type="email" name="email" value=""> </td>
                </tr>
            <tr>
                  <td> <b>Name</b> </td>
                  <td> <input type="text" name="name" value=""> </td>
                </tr>
                <tr>
                  <td> <b> Designation </b> </td>
                  <td> <input type="text" name="desig" value=""> </td>
                </tr>
                <tr>
                  <td> <b> Address </b> </td>
                  <td> <textarea  id= "address"  cols="50" rows="3" name="address"></textarea></td>
                </tr>
                <tr>
                  <td> <b> Mobile No. </b> </td>
                  <td> <input type="text" name="mob" value=""> </td>
                </tr>
               
                 <tr>
                  <td> <b>Gender</b> </td>
                  <td> <input type="text" name="gender" value=""> </td>
                </tr>
                 <tr>
                  <td> <b>Date Of Birth(YYYY-MM-DD)</b> </td>
                  <td> <input type="text" name="dob" value=""> </td>
                </tr>
                 <tr>
                  <td> <b>B.Tech</b> </td>
                  <td> <input type="text" name="btech" value=""> </td>
                </tr>
                 <tr>
                  <td> <b>M.Tech</b> </td>
                  <td> <input type="text" name="mtech" value=""> </td>
                </tr>
                 <tr>
                  <td> <b>PHD</b> </td>
                  <td> <input type="text" name="phd" value=""> </td>
                </tr>
                <tr>
                  <td> <b>Specialization</b> </td>
                  <td>  <textarea  id= "special"  cols="50" rows="3" name="special"> </textarea></td>
                </tr>
               <!-- <tr>
           
              <td> <b>Choose Profile image</b> </td>

              <td> <input type="file" name="image" value=""> </td>
            </tr>-->
            <td></td>
            <td class="SubmitModFac" style="cellPADDing:20%;">
              <br>
              <input type="submit" align="center" name="ModFacSub" value="Submit">
              <input type="reset" name="ModFacReset" align="center" value="Reset">
            </td>
          </table>
        </form>
      </div>
    </div>
    <!--   View class of staff -->
    <div id="View" class="tabcontent">
      <br>
      <div style="overflow-x:auto;">
        <form class="ViewFac" action="view1.php" method="post">


        <table>
          <th>
          <td>
            <h3> <b> View COMPANY Details</b></h3>
          </td>

          </th>
          <tr>
            <td> <b>Enter Email-Id</b> </td>
            <td> <input type="email" name="email" value=""> </td>
          </tr>
          <tr>
            <td style="colspan:1;">
              <div class="SubViewFac" style="text-align:right;">
                <br>
                <input type="submit" name="ViewFacSub" value="View">
            <td><br> <input type="reset" name="ViewFacReset" value="reset"></td>
      </div>
      </td>
      </tr>
      </table>  </form>
    </div>
<br><br>
<br><br>
<br><br>
<br><br>
<h2>To view records of all the COMPANY, Click on "View all".</h2>
<button style="font-size: 16px; background-color: orange;"><a href=viewall4.php><h3>VIEW ALL</h3></a></button>
   

  </div>
  <!--   View All class of staff -->
 
</DIV>
</div>
</section>
</div>
</div>

  </section>
  </div>
  </div>


  <div class="main" id="section3">
  <div class="tab">
    
    <button class="tablinks" onclick="openCity(event, 'Delete1')">Delete</button>
    <button class="tablinks" onclick="openCity(event, 'View1')">View</button>
   
  </div>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>

  <div class="Student" style=" background-image: URL('photo/7.jpg');
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;background-color:#d52484;text-align:center; height:100%">


      <section>
        <!--   add class of Student -->
        <div id="Add1" class="tabcontent">
          <h1 style="text-align:center;"><em>Student Details:-</em></h1>
              (If u leave any column empty, you will be redirected to this column, so be carefull and on successful submission u will be directed to next page).

          <form class="edit" action="signin6.php" method="post">
            <table align="center" cellpadding="4px">
              <tr>
                <td><b> Name</b></td>
                <td> <input type="text" name="name" value=""> </td>
              </tr>
              <tr>
              <tr>
                <td><b>Registration No.</b></td>
                <td> <input type="text" name="reg" value=""> </td>
              </tr>
              <td><b>Father`s Name</b></td>
              <td> <input type="text" name="father" value=""> </td>
              </tr>
              <tr>
                <td><b>Mother`s Name</b></td>
                <td> <input type="text" name="mother" value=""> </td>
              </tr>
              <tr>
                <td> <b>Date of Birth(yyyy-mm-dd)</b></td>
                <td> <input type="text" name="dob" value=""> </td>
              </tr>
              <tr>
                <td><b>Semester</b></td>
                <td> <input type="text" name="sem" value=""> </td>
              </tr>
              <tr>
                <td><b>Address</b></td>
                <td>  <textarea  id= "address"  cols="50" rows="3" name="address"></textarea></td>
              </tr>
              <tr>
                <td><b>Mobile No.</b></td>
                <td> <input type="text" name="mob" value=""> </td>
              </tr>
              <tr>
                <td><b>Email-id</b></td>
                <td> <input type="email" name="email" value=""> </td>
              </tr>
              <tr>
                <td><b>CGPA</b></td>
                <td> <input type="text" name="cgpa" value=""> </td>
              </tr>
               <tr>
                <td><b>Gender</b></td>
                <td> <input type="text" name="gender" value=""> </td>
              </tr>
            </table>
            <br><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
          </form>
        </div>
        <!--   Delete class of Student -->
        <div id="Delete1" class="tabcontent">

          <br>
          <div style="overflow-x:auto;">
            <form class="DelStu" action="delete2.php" method="post">
              <table>
                <th>
                <td>
                  <h3> <b> Delete Student Details</b></h3>
                </td>

                </th>
                <tr>
                  <td> <b>Enter Reg. No.</b> </td>
                  <td> <input type="text" name="regno" value=""> </td>
                </tr>
                <tr>
                  <td style="colspan:1;">
                    <div class="SubDel;" style="text-align:right;">
                      <br>
                      <input type="submit" name="DelStusub" value="Delete">
                  <td><br> <input type="reset" name="DelStureset" value="reset"></td>
          </div>
          </td>
          </tr>
          </table>


          </form>
        </div>

    </div>
    <!--   modify class of Student -->
    <div id="Modify1" class="tabcontent">
      <h1 style="text-align:center;"><em>Modify Student Details:-</em></h1>
      (REGISTRATION NO. cannot be updated)
   (If u leave any column empty, you will be redirected to this column, so be carefull and on successful submission u will be directed to next page).
      <form class="edit" action="modify2.php" method="post">
        <table align="center" cellpadding="4px">
        	 <td><b>Registration No.</b></td>
                <td> <input type="text" name="reg" value=""> </td>
              </tr>
          <td><b> Name</b></td>
                <td> <input type="text" name="name" value=""> </td>
              </tr>
              <tr>
              <tr>
               
              <td><b>Father`s Name</b></td>
              <td> <input type="text" name="father" value=""> </td>
              </tr>
              <tr>
                <td><b>Mother`s Name</b></td>
                <td> <input type="text" name="mother" value=""> </td>
              </tr>
              <tr>
                <td> <b>Date of Birth(yyyy-mm-dd)</b></td>
                <td> <input type="text" name="dob" value=""> </td>
              </tr>
              <tr>
                <td><b>Semester</b></td>
                <td> <input type="text" name="sem" value=""> </td>
              </tr>
              <tr>
                <td><b>Address</b></td>
                <td>  <textarea  id= "address"  cols="50" rows="3" name="address"></textarea></td>
              </tr>
              <tr>
                <td><b>Mobile No.</b></td>
                <td> <input type="text" name="mob" value=""> </td>
              </tr>
              <tr>
                <td><b>Email-id</b></td>
                <td> <input type="email" name="email" value=""> </td>
              </tr>
              <tr>
                <td><b>CGPA</b></td>
                <td> <input type="text" name="cgpa" value=""> </td>
              </tr>
               <tr>
                <td><b>Gender</b></td>
                <td> <input type="text" name="gender" value=""> </td>
              </tr>

        </table>
        <br><br>
        <input type="submit" name="modstusubmit" value="Submit">
        <input type="reset" name="modstureset" value="Reset">
      </form>
    </div>
    <!-- View class of Student -->
    <div id="View1" class="tabcontent">
      <br>
      <div style="overflow-x:auto;">
        <form class="ViewStu" action="view2.php" method="post">


        <table>
          <th>
          <td>
            <h3> <b> View Student Details</b></h3>
          </td>

          </th>
          <tr>
            <td> <b>Enter Reg. No.</b> </td>
            <td> <input type="text" name="reg" value=""> </td>
          </tr>
          <tr>
            <td style="colspan:1;">
              <div class="SubView" style="text-align:right;">
                <br>
                <input type="submit" name="viewstusub" value="View">
            <td><br> <input type="reset" name="viewstureset" value="reset"></td>
      </div>
      </td>
      </tr>
      </table>  </form>
    </div>

   
  <!--   View All class of Student -->
  <br><br>
<br><br>
<br><br>
<br><br>
<h2>To view records of all the Students, Click on "View all".</h2>
<button style="font-size: 16px; background-color: orange;"><a href=viewall3.php><h3>VIEW ALL</h3></a></button>

  </section>

   
  </div>

  </div>
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });
</script>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"><br>TOP</i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
</body>

</html>
