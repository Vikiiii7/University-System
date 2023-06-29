<?php
include 'db_studentUsers.php';

// Check if user has uploaded a new image
if (isset($_FILES['image'], $_POST['title'], $_POST['description'])) {
    // The folder where the images will be stored
    $target_dir = 'adminUploads/';
    // The path of the newly uploaded image
    $title = $_POST['title'];
    $description = $_POST['description']; 
    $image_path = $target_dir . basename($_FILES['image']['name']);

    // Check to make sure the image is valid
    if (!empty($_FILES['image']['tmp_name']) && getimagesize($_FILES['image']['tmp_name'])) {
        if (file_exists($image_path)) {
            echo '<script>alert("Image already exists, please choose another or rename the image.")</script>';
            echo '<script>location.href="adminEvents.php"</script>';
            exit();
        } else if ($_FILES['image']['size'] > 5000000) {
            echo '<script>alert("Image file size too large, please choose an image less than 500kb.")</script>';
            echo '<script>location.href="adminEvents.php"</script>';
            exit();
        } else {
            // Everything checks out, so we can move the uploaded image
            move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
            
            // Insert image info into the database (title, description, image path, and date added)
            $stmt = $conn->prepare('INSERT INTO events (title, description, filepath, uploaded_date) VALUES (?, ?, ?, CURRENT_TIMESTAMP)');
            $stmt->bind_param("sss", $title, $description, $image_path);
            $stmt->execute();
            echo '<script>alert("News Uploaded Successfully!")</script>';
            echo '<script>location.href="adminEvents.php"</script>';
            exit();
        }
    } else {
        echo '<script>alert("Please upload an image!")</script>';
        echo '<script>location.href="adminEvents.php"</script>';
        exit();
    }
}
?>
