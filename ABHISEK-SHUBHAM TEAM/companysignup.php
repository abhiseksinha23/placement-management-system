<?php include('header.php'); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                         <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="companylogin.php">Go back</a></button>
                        <h2> COMPANY SIGNUP</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <form name="signupfrm" action="comsignup.php" method="POST" onsubmit ="return validate();" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> Company's Name</label>
                            <input class="form-control" type="text" name="name" id="1"/>
                            <p></p>
                            </div>
                            <div class="form-group">
                            <label>Company's Reg No.</label>
                            <input class="form-control" type="text" name="reg" id="9"/>
                            <p></p>
                            </div>
                         <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" id="2"/>
                            <p></p>
                        </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" id="3"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="form-control" type="password" name="confirm password" id="4"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input class="form-control" type="text" name="contact" id="5"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Type of Institutiton</label>
                            <input class="form-control" type="text" name="type" id="6"/>
                            <p></p>
                        </div>
                          <div class="form-group">
                            <label>Address</label>
                            
                            <textarea class="form-control"  name="add" id="7"> </textarea>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <label>Package(in Lac.)</label>
                            <input class="form-control" type="text" name="package" id="8"/>
                            <p></p>
                        </div>
                          <div class="form-group">
                            <label>CGPA Required</label>
                            <input class="form-control" type="text" name="cgpar" id="8"/>
                            <p></p>
                        </div>
                          <div class="form-group">
                            <label>JOB offering</label>
                            <input class="form-control" type="text" name="job" id="8"/>
                            <p></p>
                        </div>
                          <div class="form-group">
                            <label>Branch Eligible</label>
                            <input class="form-control" type="text" name="br" id="8"/>
                            <p></p>
                        </div>
                        <div class="form-group">
                            <br><br>
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Signup"/>
                        <input type="reset" class="btn btn-danger btn-lg btn-block" value="Clear"/>
                        </div>
                    </div>
                    </form>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <script>
        function validate()
    {
        flag = 0;
        
        if(document.getElementById("1").value=='')
        {
            alert("Enter Company's Name");
            flag = 1;
        }
        
       else  if(document.getElementById("2").value=='')
        {
            alert("Enter Company's email ");
            flag = 1;
        }
       else if(document.getElementById("3").value=='')
        {
            alert("Please Enter Password");
            flag = 1;
        }
       else if(document.getElementById("4").value=='')
        {
            alert("Please enter Confirm Password");
            flag = 1;
        }
       else if(document.getElementById("3").value!=document.getElementById("4").value)
        {
            alert("Password didn't match");
            flag = 1;
        }
        
       
       else if(document.getElementById("5").value=='')
        {
            alert("Please Enter Company's Contact No.");
            flag = 1;
        }

       else if(document.getElementById("6").value=='')
        {
            alert("Please Enter type of Institutiton");
            flag = 1;
        }
         else if(document.getElementById("7").value=='')
        {
            alert("Please Enter Company's address");
            flag = 1;
        }
         else if(document.getElementById("8").value=='')
        {
            alert("Please Enter Package Provided");
            flag = 1;
        }
         else if(document.getElementById("9").value=='')
        {
            alert("Please Enter Company's Registration No.");
            flag = 1;
        }

        if (flag==0) 
         return true;
        
        else
            return false;
    }
    </script>
      