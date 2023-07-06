<?php

require_once '../config/database.php';


// Create a new instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();


if (isset($_POST['uname']) && isset($_POST['pass'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    try {
        
        $stmt = $conn->prepare("INSERT INTO adminuser (uname, pass) VALUES (:uname, :pass)");

        
        $stmt->bindParam(':uname', $uname);
        $stmt->bindParam(':pass', $pass);

     
        $stmt->execute();

        // Return success response
        $response = [
            'status' => 'success',
            'message' => 'Data inserted successfully',
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    } catch (PDOException $e) {
        // Return error response
        $response = [
            'status' => 'error',
            'message' => 'Error inserting data: ' . $e->getMessage(),
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    // Return error response if parameters are missing
    $response = [
        'status' => 'error',
        'message' => 'Missing parameters',
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
