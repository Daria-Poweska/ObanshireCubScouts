<?php
include '../../account/config/config.php';
session_start();

// Ensure BASE_URL is defined
if (!defined('BASE_URL')) {
    define('BASE_URL', '/ObanshireCubScouts/'); // Adjust this according to your actual base URL
}

if (!isset($_SESSION['user_id'])) {
    $_SESSION['error_message'] = 'You need to log in to perform this action.';
    header('Location: ' . BASE_URL . 'leaderusers');
    exit();
}

// Check if the user is a leader and has the right permissions
if ($_SESSION['user_type'] != 'leader') {
    $_SESSION['error_message'] = 'You do not have permission to delete users.';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

// Get the user ID from the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Check if userId is valid
    if (!filter_var($userId, FILTER_VALIDATE_INT)) {
        $_SESSION['error_message'] = 'Invalid user ID provided.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    // Start a transaction
    $conn->begin_transaction();

    try {
        // Delete associated records from the availability table
        $stmt = $conn->prepare("DELETE FROM availability WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception('Prepare statement for availability failed: ' . $conn->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute statement for availability failed: ' . $stmt->error);
        }
        $stmt->close();

        // Delete the user from the users table
        $stmt = $conn->prepare("DELETE FROM users WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception('Prepare statement for users failed: ' . $conn->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute statement for users failed: ' . $stmt->error);
        }
        $stmt->close();

        // Commit the transaction
        $conn->commit();
        $_SESSION['success_message'] = 'User deleted successfully.';

    } catch (Exception $e) {
        // Rollback the transaction
        $conn->rollback();
        $_SESSION['error_message'] = 'Failed to delete user: ' . $e->getMessage();
    }

    $conn->close();
} else {
    $_SESSION['error_message'] = 'No user ID provided.';
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>