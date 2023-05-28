
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTI Student Login</title>
    <link rel="stylesheet" href="loginstudent.css">

  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  
<?php

  include "db_studentUsers.php";

?>

</head>
<body>


    <div class="images">

            

            <img src="intilogo.png" class="intilogo" width="650px" style="display: block; margin-left: auto; margin-right: auto;">
        
                
    </div>

<form class="box" action="studentCheck.php" method="POST"> 

<h1>STUDENT LOGIN</h1>

<input type="text" name="uname" placeholder="Enter Username" id="uname">
<input type="password" name="userpass" placeholder="Enter Password" id="userpass">
<input type="submit" name="submit" value="Login">
 <div class="register_link">
    Not a Student yet? <a href="studentRegister.php">Register</a><br>
    <br>
    
    <a href="#">Sign in As ADMIN</a> <!-- need admin login page -->

</form>
</div>


</form>

</body>
</html>








