
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTI Administrator Login</title>
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

<form class="box" action="adminLoginCheck.php" method="POST"> 

<h1>ADMIN LOGIN</h1>

<input type="text" name="uname" placeholder="Enter Username" id="uname">
<input type="password" name="pass" placeholder="Enter Password" id="pass">
<input type="submit" name="submit" value="Login">

<a href="loginstudent.php" style="color: turquoise;">Sign in As Student</a>
 
</form>
</div>


</form>

</body>
</html>








