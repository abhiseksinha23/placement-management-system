<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <style>
    .BG{
        background-image: URL("photo/3.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
</head>
<body>
 
<?php include('header.php'); ?>
 
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                         <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="dashboard.php">Go back</a></button>
                        <h1> STUDENT LOGIN</h1>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <form name="loginfrm" action="studentsignin.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email"/>
                            <p> </p>
                        </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password"/>
                            
                        </div>
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Login"/>
                        </form>
                        <p></p>
                        New User?   <a href="studentsignup.php">   Click to Signup</a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         

  </body>
</html>