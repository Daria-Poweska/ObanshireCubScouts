<?php
include '../../account/config/config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['error_message'] = 'You need to log in to perform this action.';
    header('Location: ' . BASE_URL . 'gallery');
    exit();
}

// Checking if the user is a leader and has the right permissions
if ($_SESSION['user_type'] != 'leader') {
    $_SESSION['error_message'] = 'You do not have permission to delete images.';
    header('Location: ' . BASE_URL . 'gallery');
    exit();
}

// Getting the image ID from the URL
if (isset($_GET['id'])) {
    $imageId = $_GET['id'];

    // Checking if imageId is valid
    if (!filter_var($imageId, FILTER_VALIDATE_INT)) {
        $_SESSION['error_message'] = 'Invalid image ID provided.';
        header('Location: ' . BASE_URL . 'gallery');
        exit();
    }

    // Fetching the image path
    $stmt = $conn->prepare("SELECT img_path FROM pictures WHERE picture_id = ?");
    $stmt->bind_param("i", $imageId);
    $stmt->execute();
    $stmt->bind_result($imgPath);
    $stmt->fetch();
    $stmt->close();

    // Deleting the image from the database
    $stmt = $conn->prepare("DELETE FROM pictures WHERE picture_id = ?");
    $stmt->bind_param("i", $imageId);
    if ($stmt->execute()) {
        // Deleting the image file from the server
        if (file_exists('../../assets/Images/Gallery' . $imgPath)) {
            unlink('../../assets/Images/Gallery' . $imgPath);
        }
        $_SESSION['success_message'] = 'Image deleted successfully.';
    } else {
        $_SESSION['error_message'] = 'Failed to delete image: ' . $stmt->error;
    }
    $stmt->close();
} else {
    $_SESSION['error_message'] = 'No image ID provided.';
}

header('Location: ' . BASE_URL . 'gallery');
exit();
?>
