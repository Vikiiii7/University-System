 
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


.profdetails{
  
  margin-top: 50px;
  
  
  
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0px 10px 18px rgba(0,0,0,0.60);
}

.content .profdetails h3{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.content .profdetails h3::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 50%;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content .profdetails .form-group input{
  display: flex;
  height: 45px;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.content .profdetails .form-group input:focus,
.profdetails .form-group input:valid{
  border-color: #9b59b6;
}
.content .detailalumni .profdetails form .form-group{
  margin-bottom: 15px;
  width: calc(50% / 2 - 20px);
}

.content .profdetails .actionbuttons a{
    color: black;
    margin-left: 50px;
    margin-right: 40px;
    border-radius: 5px;
    border: 2px solid blue;
    transition: all 0.3s ease;
    background: linear-gradient(135deg, red, pink);
   
  }

.content .profdetails .actionbuttons a:hover{
     
    background: linear-gradient(-135deg, red, pink);
   
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
    
    <div class="profdetails">
          <h3>Please Fill-out All Fields</h3>
            <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM users WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="adminStudentUpdate.php" method="POST">

                        <table>
                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <tr class="form-group">
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                
                                

                            </tr>

                            <tr class="form-group">
                                

                                <td><input type="text" name="edit_pname" value="<?php echo $row['pname'] ?>" class="form-control" placeholder="Enter Name"></td>
                                <td><input type="text" name="edit_uname" value="<?php echo $row['uname'] ?>" class="form-control" placeholder="Enter Username"></td>
                                <td><input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email"></td>
                                
                                

                            </tr>
                    

                            <tr class="form-group">

                                
                                <th>Phone Num.</th>
                                <th>Gender</th>
                                

                            </tr>

                            <tr class="form-group">


                                <td><input type="text" name="edit_phonenum" value="<?php echo $row['pnumber'] ?>" class="form-control" placeholder="Enter Phone Num"></td>
                                <td><input type="text" name="edit_gender" value="<?php echo $row['gender'] ?>" class="form-control" placeholder="Enter Email"></td>
                               
                            
                            </tr>

                            <tr class="form-group">

                                <th>Address 1</th>
                                
                            </tr>

                            <tr class="form-group">

                                 <td><input type="text" name="edit_address1" value="<?php echo $row['address1'] ?>" class="form-control" placeholder="Enter Address 1"></td>
                                                           
                            </tr>
                            </table>
                            <br>
                            <br>
                        

                    <div class="actionbuttons">
                            <a href="adminStudentList.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
                        </div>
                    </form>
                        <?php
                }
            }
        ?>
            
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
