<!DOCTYPE html>
<html>
<head>
  <title>University Student Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <style type="text/css">

    /* Default styles */
body {
  margin: 0;
  padding: 0;
  background: url("bgdashboard.png");
  background-size: cover;
  font-family: "Quicksand";
  font-weight: 600;

}

.sidebar {
  background-color: #333;
  color: #fff;
  height: 100vh;
  width: 60px; /* Adjust the width as needed */
  position: fixed;
  top: 0;
  left: 0;
  padding: 20px;
  box-sizing: border-box;
  transition: width 0.3s ease-in-out;
  display: flex;
  flex-direction: column;
  align-items: center;
  
}

.sidebar.open {
  width: 200px; /* Adjust the width as needed */
}

.sidebar.closed {
  width: 100px; /* Adjust the width as needed */
}

.sidebar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
}

.sidebar li {
  margin-bottom: 10px;
  width: 100%;
}

.sidebar a {
  color: #fff;
  text-decoration: none;
  display: flex;
  align-items: center;
  height: 40px;
  transition: all 0.3s ease;
  width: 100%;
  padding: 10px;
  position: relative;
}

.sidebar a i {
  margin-right: 10px;
  font-size: 20px;
}

.sidebar a span.tooltip {
  position: absolute;
  top: 50%;
  left: calc(100% + 15px);
  transform: translateY(-50%);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 17px;
  font-weight: 100%;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0.3s;
  color: black;
}
.sidebar.closed a .item{
  justify-content: center;
   
    text-indent: 100%;
    white-space: nowrap;
    overflow: hidden;
}

.sidebar.closed a i {
  margin-right: 0;
}

.sidebar.closed a span.tooltip {
  opacity: 1;
  pointer-events: auto;
}

.sidebar.closed h3 {
  justify-content: center;
   
    text-indent: 100%;
    white-space: nowrap;
    overflow: hidden;
}

.sidebar.closed h3 i {
 margin-right: 0;
 display: flex;
}

.sidebar.closed a span.tooltip {
  opacity: 0;
  pointer-events: none;
}

.sidebar a:hover span.tooltip {
  opacity: 1;
  pointer-events: auto;
}

.sidebar a i {
  margin-right: 0;
  font-size: 24px;
}





.sidebar .menu-icon {
  
  font-size: 20px;
}

.content {
  margin-left: 200px;
  padding: 20px;
}

/* Media query for smaller screens */
@media only screen and (max-width: 600px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    padding: 10px;
    margin-bottom: 20px;
  }

  .sidebar li {
    margin-bottom: 5px;
  }

  .content {
    margin-left: 0;
  }
}

.content .uploadform{


  max-width: 1000px;
  
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  }

  </style>
</head>
<body>
<?php

session_start(); 
include 'db_studentUsers.php';


?>

  <div class="sidebar open">
    
    <ul>
      <h3>
      Menu    
      <i class='bx bx-menu menu-icon' id="btn"></i>
    </h3>
      <li><a href="studentDashboard.php"><i class="bx bx-grid-alt"></i><span class="tooltip">Dashboard</span><div class="item">Dashboard</div></a></li>
      <li><a href="studentProfile.php"><i class="bx bx-user"></i><span class="tooltip">Profile</span><div class="item">Profile</div></a></li>
      <li><a href="studentEvents.php"><i class="bx bx-calendar"></i><span class="tooltip">Events</span><div class="item">Events</div></a></li>
      <li><a href="studentForum.php"><i class="bx bx-chat"></i><span class="tooltip">Forum</span><div class="item">Forum</div></a></li>
      <li><a href="logoutweb.php"><i class="bx bx-log-out"></i><span class="tooltip">Logout</span><div class="item">Logout</div></a></li> 
    </ul>
  </div>


  <div class="content">
    <h1>This is Forum Page.. Post a Discussion..</h1>

    <div class="uploadform">
    <form action="postForum-check.php" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="pname" class="pname" placeholder="Enter your name" required>
          </div>
          
          <br>
          <br>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" class="email" placeholder="Enter your Email" required>
          </div>
          
          <br>
          <br>

          <div class="input-box">
            <span class="details">Discussion</span>
            <textarea name="dissc" cols="30" rows="5" style="resize: none;" placeholder="Enter Your Discussion" required></textarea>
          </div>


        </div>
        
        <br>
        <br>
        
        <div class="button">
          <input type="submit" name="submit" value="Post">

        </div>
     
      </form>
    </div>

  </div>

      

</body>

</html>
