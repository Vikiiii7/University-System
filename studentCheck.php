<?php 
session_start(); 
include "db_studentUsers.php";

if (isset($_POST['uname']) && isset($_POST['userpass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$userpass = validate($_POST['userpass']);

	if (empty($uname)) {
		
		echo '<script>alert("Username is required")</script>';
		echo "<script>location.href='loginstudent.php'</script>";
	    exit();

	}else if(empty($userpass)){
        echo '<script>alert("Password is required")</script>';
		echo "<script>location.href='loginstudent.php'</script>";
	    exit();
	}
	else{

		$sql = "SELECT * FROM users WHERE uname='$uname' AND userpass='$userpass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['uname'] === $uname && $row['userpass'] === $userpass) {
            	$_SESSION['uname'] = $row['uname'];
            	$_SESSION['pname'] = $row['pname'];
            	$_SESSION['id'] = $row['id'];
            	
            	echo '<script>alert("Login Success")</script>';
		        echo "<script>location.href='studentDashboard.php'</script>";
		        exit();
            }else{
				echo '<script>alert("Incorrect Username or Password")</script>';
				echo "<script>location.href='loginstudent.php'</script>";
		        exit();
			}
		}else{
			echo '<script>alert("Incorrect Username or Password")</script>';
			echo "<script>location.href='loginstudent.php'</script>";
	        exit();
		}
	}
}else{
	echo '<script>alert("Unidentified Error. Please Check Details Again.")</script>';
	echo "<script>location.href='loginstudent.php'</script>";
	exit();
} 
