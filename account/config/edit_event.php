<!-- Edit Event -->

<?php
include '../../account/config/config.php';
session_start();

// Checking if the user is logged in and is a leader
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'leader') {
    $_SESSION['error_message'] = 'You do not have permission to edit events.';
    header("Location: " . BASE_URL . "events");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $eventId = $_POST['event_id'];
    $title = $_POST['title'];
    $date = $_POST['event_date'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $activities = $_POST['activities'];
    $image = $_FILES['image']['name'];
    
    if ($image) {
        $target_dir = "../../assets/Images/Gallery/";
        $target_file = $target_dir . basename($image);

        // Moving uploaded file to target directory
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $_SESSION['error_message'] = 'Failed to upload image.';
            header("Location: " . BASE_URL . "events");
            exit();
        }
    } else {
        // If no new image is uploaded, the existing image will be saved
        $imageQuery = "SELECT image FROM events WHERE event_id = ?";
        $stmt = $conn->prepare($imageQuery);
        $stmt->bind_param("i", $eventId);
        $stmt->execute();
        $stmt->bind_result($image);
        $stmt->fetch();
        $stmt->close();
    }

    // Updating event details in the database
    $stmt = $conn->prepare("UPDATE events SET title = ?, event_date = ?, location = ?, description = ?, activities = ?, image = ? WHERE event_id = ?");
    $stmt->bind_param("ssssssi", $title, $date, $location, $description, $activities, $image, $eventId);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = 'Event updated successfully.';
    } else {
        $_SESSION['error_message'] = 'Failed to update event.';
    }

    $stmt->close();
}

header("Location: " . BASE_URL . "events");
exit();
?>
