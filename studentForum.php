<!DOCTYPE html>
<html>
<head>
  <title>Events</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


      <?php 
    session_start();
    include "db_studentUsers.php"
    

?>
  <style type="text/css">

  
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
}


.content .jobtab{
  margin-top: 70px;
  margin-left: 250px;
  max-width: 1000px;
  width: 100%;
  background: rgb(128,230,235);
background: linear-gradient(180deg, rgba(128,230,235,1) 22%, rgba(254,90,251,1) 100%);
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);

}
.content .jobtab .title{
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding: 5px;
  padding-left: 50px;
  background: linear-gradient(59deg, rgba(209,170,25,1) 21%, rgba(0,92,139,1) 100%);
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}


.content .jobtab .postjob button{
  font-weight: bold;
  margin-left: 800px;
  border-radius: 3px;
  background-color: red;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  
}

.content .jobtab .jobdetails{
    border-radius: 10px;
    width:800px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    padding-left: 15px;
    padding-top: 10px;
}

.content .jobtab .jobdetails .descdetails{

    background: rgb(128,230,235);
    background: linear-gradient(270deg, rgba(128,230,235,1) 17%, rgba(249,174,247,1) 96%);
    border-radius: 10px;
    max-width: 780px;
    box-shadow: -11px -15px 10px rgb(0 0 0 / 15%);
    padding-top: 10px;
    padding-bottom: 10px;
    word-break: break-word;
}

.content .jobtab .jobdetails .descdetails label{

    padding-left: 20px;
}
.content .jobtab .jobdetails .descdetails  li{
    list-style: none;
    padding-left: 20px;
    text-decoration: none;
    overflow: visible;
    
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
      <li><a href="studentDashboard.php"><i class="bx bx-grid-alt"></i><span class="tooltip">Dashboard</span><div class="item">Dashboard</div></a></li>
      <li><a href="studentProfile.php"><i class="bx bx-user"></i><span class="tooltip">Profile</span><div class="item">Profile</div></a></li>
      <li><a href="studentEvents.php"><i class="bx bx-calendar"></i><span class="tooltip">Events</span><div class="item">Events</div></a></li>
      <li><a href="studentForum.php"><i class="bx bx-chat"></i><span class="tooltip">Forum</span><div class="item">Forum</div></a></li>
      <li><a href="logoutweb.php"><i class="bx bx-log-out"></i><span class="tooltip">Logout</span><div class="item">Logout</div></a></li> 
    </ul>
  </div>


  <div class="content">
    
   <div class="jobtab">
        <div class="title"><h1>Discussion</h1></div>
        <div class="postjob"><center><button><a href="postForum.php">Upload a Discussion</a></button></center></div>
        <div class="jobdetails">
          <?php 

            $sql = "SELECT * FROM forum;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $num = 1;

            if($resultCheck > 0) {
              while($row = mysqli_fetch_assoc($result)){
?>
<ul>
<div class="descdetails">
 
              <label> <?php echo "$num".". </br> ";?></label>
            
              <li>From : <?php echo $row['pname']."</br>";?></li>

              <li>Email : <?php echo $row['email']."</br>";?></li>
                
              <li>Discussion : <?php echo $row['dissc']."</br>";?></li>

          

               
</div>
</ul><?php $num++;
              }
            }
  ?>
        </div>

      </div>




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
