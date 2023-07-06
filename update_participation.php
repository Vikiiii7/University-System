<?php
session_start();
include 'db_studentUsers.php';


$uname = $_SESSION['uname'];                      
                
if (isset($_POST['participate']) && isset($_POST['event_id'])) {
    $eventID = $_POST['event_id'];     
    
          
          // Check if the user is already participating in the event
    
    $query = "SELECT id FROM participation WHERE uname = '$uname' AND event_id = '$eventID'";
    
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
       
        	// User is already participating, so remove participation
        
        		$deleteQuery = "DELETE FROM participation WHERE uname = '$uname' AND event_id = '$eventID'";
        	mysqli_query($conn, $deleteQuery);
        
       
       		// Return response indicating participation removal
        
        		$response = array('status' => 'success', 'message' => 'Removed participation');
        	echo json_encode($response);
        
        exit;
    
    } else {
        
        		// User is not participating, so add participation
       
       		 $insertQuery = "INSERT INTO participation (uname, event_id) VALUES ('$uname', '$eventID')";
        	mysqli_query($conn, $insertQuery);
        
        // Return response indicating participation addition
        $response = array('status' => 'success', 'message' => 'Added participation');
        echo json_encode($response);
        exit;
    }
}

// If the code reaches this point, an error occurred
$response = array('status' => 'error', 'message' => 'An error occurred. Please try again.');
echo json_encode($response);
exit;
?>
