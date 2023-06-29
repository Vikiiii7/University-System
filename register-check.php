<?php 
session_start(); 
include "db_studentUsers.php";

if (isset($_POST['submit'])) {
    if (isset($_POST['pname']) && isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['pnumber']) && isset($_POST['userpass']) && isset($_POST['cpass'])  && isset($_POST['address1']) &&  isset($_POST['gender'])) {
        
        $pname = $_POST['pname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $userpass = $_POST['userpass'];
        $cpass = $_POST['cpass'];
        $address1 = $_POST['address1'];
        $gender = $_POST['gender'];


            $Select = "SELECT email FROM users WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO users(pname, uname, email, pnumber, userpass, cpass, address1, gender) values(?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $row = $stmt->num_rows;

            if ($row == 0) {
                if($userpass == $cpass){

                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssissss",$pname, $uname, $email, $pnumber, $userpass, $cpass, $address1, $gender);
                if ($stmt->execute()) {
                    echo '<script>alert("New record inserted sucessfully.")</script>';
                    echo '<script>location.href="loginstudent.php"</script>';
                }
                else {
                    echo $stmt->error;
                }
            }else{
                echo '<script>alert("Passwords are not same. Try Again.")</script>';
                echo '<script>location.href="studentRegister.php"</script>';
            }
        }
            else {
                echo '<script>alert("Email Already Taken. Try a new one.")</script>';
                echo '<script>location.href="studentRegister.php"</script>';
            }
            $stmt->close();
            $conn->close();
        
    }
    else {
        echo '<script>alert("All Fields are required.")</script>';
        echo '<script>location.href="studentRegister.php"</script>';
    }
}
else {
    echo "Submit button is not set";
}
?>