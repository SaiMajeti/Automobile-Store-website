<?php
include("header.php");
include("navbar.php");
include("database_config.php");

$u_collection = $db->users;

?>
<html>
    <head>
        <title> Signup page </title>
    </head>
    <body>
        
        <div class="container">
          <div class="row">
              <center><h2> Register</h2></center> <br>
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                    <form name="signup_form" class="form" onsubmit="" method="post" role="form" accept-charset="utf-8">
                        <input type="text" class="form-control" value="" placeholder="Username" name="username"><br>
                        <input type="email" class="form-control" value="" placeholder="Email" name="useremail"><br>
                        
                        <select class="form-control box"  name="listing_type">
                            <option>private party</option>
                            <option>dealer</option>
                            <option>broker</option>
                        </select>
                        
                        <br>
                        
                        <input type="password" class="form-control" value="" placeholder="Password" name="password"><br>
                        <input type="password" class="form-control" value="" placeholder="Confirm_Password" name="confirmpassword"><br>

                        <button class="btn btn-lg btn-warning btn-block" type="submit">Sign Up</button><br>

                    </form>
              </div> 
              <div class="col-sm-4"></div>
          </div>
        </div>
        
    </body>
</html>



