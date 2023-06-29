<?php
include('db_studentUsers.php');


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script>alert("Student Profile Succesfully Deleted!")</script>';
        echo '<script>location.href="adminStudentList.php"</script>'; 
    }
    else
    {
        echo '<script>alert("Delete not Success. Error Occured!")</script>';
        echo '<script>location.href="adminStudentList.php"</script>'; 
    }    
}





?>