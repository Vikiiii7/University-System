<?php  
session_start(); 
include 'db_studentUsers.php';

if (isset($_POST['submit'])) {
    if (isset($_POST['pname']) && isset($_POST['email']) && isset($_POST['dissc'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $pname = validate($_POST['pname']);
        $email = validate($_POST['email']);
        $dissc = validate($_POST['dissc']);

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO forum (pname, email, dissc) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $pname, $email, $dissc);

        if ($stmt->execute()) {
            echo '<script>alert("Forum Successfully Uploaded!")</script>';
            echo '<script>location.href="studentForum.php"</script>';
        } else {
            echo '<script>alert("Post failed to Upload. Try Again...")</script>';
            echo '<script>location.href="postForum.php"</script>';
        }

        $stmt->close();
    } else {
        header("Location: postForum.php");
    }
}
?>
