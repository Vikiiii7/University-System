<?php
include('db_studentUsers.php');

if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo '<script>alert("Student Profile Successfully Deleted!")</script>';
    } else {
        echo '<script>alert("Delete Not Successful. Error Occurred!")</script>';
    }
    echo '<script>location.href="adminStudentList.php"</script>';
}

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $pname = $_POST['edit_pname'];
    $uname = $_POST['edit_uname'];
    $email = $_POST['edit_email'];
    $pnumber = $_POST['edit_phonenum'];
    $gender = $_POST['edit_gender'];
    $address1 = $_POST['edit_address1'];

    $query = "UPDATE users SET pname=?, uname=?, email=?, pnumber=?, gender=?, address1=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssi", $pname, $uname, $email, $pnumber, $gender, $address1, $id);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo '<script>alert("Update Successful!")</script>';
        } else {
            echo '<script>alert("No changes made.")</script>';
        }
    } else {
        echo '<script>alert("Update Not Successful. Error Occurred!")</script>';
    }
    echo '<script>location.href="adminStudentList.php"</script>';
}
?>
