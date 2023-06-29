 
<!DOCTYPE html>
<html>
<head>
  <title>Inti Admin Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<?php 
include "db_studentUsers.php"

?>
  


 <style type="text/css">
  /* Default styles */
  body {
    margin: 0;
    padding: 0;
    background: url("adminbg.jpg");
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
  width: 120px; /* Adjust the width as needed */
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



.content .totalstudent{
  background-color: skyblue;
  width: 200px;
  border: 5px solid blue;
  border-radius: 5px;
  
}

.content .totalevents{
  background-color: yellowgreen;
  width: 200px;
  border: 5px solid blue;
  border-radius: 5px;
  
}
.content .totalForum{
  background-color: orchid;
  width: 200px;
  border: 5px solid blue;
  border-radius: 5px;
  
}

</style>

</head>
<body>

  <div class="sidebar open">
    
    <ul>
      <h3>
      Menu    
      <i class='bx bx-menu menu-icon' id="btn"></i>
    </h3>
      <li><a href="adminDashboard.php"><i class="bx bx-grid-alt"></i><span class="tooltip">Dashboard</span><div class="item">Dashboard</div></a></li>
      <li><a href="adminStudentList.php"><i class="bx bx-user"></i><span class="tooltip">Students List</span><div class="item">Student List</div></a></li>
      <li><a href="adminEvents.php"><i class="bx bx-calendar"></i><span class="tooltip">Events</span><div class="item">Events</div></a></li>
      
      <li><a href="logoutweb.php"><i class="bx bx-log-out"></i><span class="tooltip">Logout</span><div class="item">Logout</div></a></li> 
    </ul>
  </div>

  <div class="content">
    
    
    <h3><center><b><h1>Welcome to the Inti Administrator Dashboard</h1></b></center></h3>
<br>
<br>
<center>
  <div class="totalstudent">
     <span class="float-right summary_icon"><i class="fa fa-users"></i></span>
      <h4><b><?php echo $conn->query("SELECT * FROM users")->num_rows; ?></b></h4>
      
        <p><b>Total Students Registered</b></p>
  </div>
  <br>
  <br>
  <div class="totalevents">
     <span class="float-right summary_icon"><i class="fa fa-users"></i></span>
      <h4><b><?php echo $conn->query("SELECT * FROM events")->num_rows; ?></b></h4>
      
        <p><b>News & Activities</b></p>
  </div>
  <br>
  <br>
  <div class="totalForum">
     <span class="float-right summary_icon"><i class="fa fa-users"></i></span>
      <h4><b><?php echo $conn->query("SELECT * FROM forum")->num_rows; ?></b></h4>
      
        <p><b>Forum Posted</b></p>
  </div>
</center>

  </div>

  

  <script>
    $(document).ready(function() {
      // Toggle sidebar open and closed
      $('#btn').click(function() {
        $('.sidebar').toggleClass('open closed');
      });

    });
  </script>
</body>
</html>
