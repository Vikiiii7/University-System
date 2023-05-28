<!DOCTYPE html>
<html>
<head>
  <title>University Student Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

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
  width: 200px;
  position: fixed;
  top: 0;
  left: 0;
  padding: 20px;
  box-sizing: border-box;

}

.sidebar h3 {
  margin-top: 0;
}

.sidebar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.sidebar li {
  margin-bottom: 10px;
}

.sidebar a {
  color: #fff;
  text-decoration: none;
}

.sidebar a:hover {
  text-decoration: underline;
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

.slideshow {
      position: relative;
      height: 400px;
      overflow: hidden;
      margin-left: 500px;
    }

    .slideshow img {
      position: absolute;
      top: 0;
      left: 0;
      width: 700px;
      height: 400px;
      object-fit: cover;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .slideshow img.active {
      opacity: 1;
    }

  </style>
</head>
<body>

  <?php /* welcome message for student/ need update
session_start();

// Check if user is logged in
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Welcome, " . $username . "! This is your student dashboard.";
} else {
    // Redirect to login page
    header("Location: loginstudent.php");
    exit();
}

*/

?>

  <div class="sidebar">
    <h3>Menu</h3>
    <ul>
      <li><a href="studentDashboard.php">Dashboard</a></li>
      <li><a href="studentProfile.php">Profile</a></li>
      <li><a href="#">Events</a></li>
      <li><a href="#">Forum</a></li>
      <li><a href="loginstudent.php">Logout</a></li> <!--add function to end session -->
    </ul>
  </div>

  <div class="content">
    <h1>Welcome to the University Student Dashboard</h1>
    <p>akjsdnjaksdkjasdnajldnklasd.</p>
  </div>

      <div class="slideshow">
      
          <img src="inticampus.png" class="active" alt="inticampus">
          <img src="alumniPic.png" alt="alumnipic">
          <img src="img/slide3.jpg" alt="asdasd">
      
      </div>


  <script>
  $(document).ready(function() {
    // Rotate images every 5 seconds
    setInterval(function() {
      var current = $('.slideshow img.active');
      var next = current.next();

      // If we reached the end of the slideshow, start over from the beginning
      if (next.length == 0) {
        next = $('.slideshow img').first();
      }

      current.removeClass('active');
      next.addClass('active');
    }, 3000);
  });
</script>


</body>

</html>
