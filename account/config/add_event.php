<!-- Adding Event -->

<?php
include '../../account/config/config.php';
session_start();

// Checking if the user is logged in and is a leader
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'leader') {
    $_SESSION['error_message'] = 'You do not have permission to add events.';
    header("Location: " . BASE_URL . "leaderevents");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $date = $_POST['event_date'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $activities = $_POST['activities'];
    $image = $_FILES['image']['name'];
    $target_dir = "../../assets/Images/Gallery/"; 
    $target_file = $target_dir . basename($image);

    // Moving uploaded file to target directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Inserting event details into database
        $stmt = $conn->prepare("INSERT INTO events (title, event_date, location, description, activities, image) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $title, $date, $location, $description, $activities, $image);

        if ($stmt->execute()) {
            $_SESSION['success_message'] = 'Event added successfully.';
        } else {
            $_SESSION['error_message'] = 'Failed to add event.';
        }

        $stmt->close();
    } else {
        $_SESSION['error_message'] = 'Failed to upload image.';
    }

    header("Location: " . BASE_URL . "leaderevents");
    exit();
}
?>
