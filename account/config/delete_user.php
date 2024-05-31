<?php
include '../../account/config/config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['error_message'] = 'You need to log in to perform this action.';
    header('Location: ' . BASE_URL . 'leaderusers');
    exit();
}

// Checking if the user is a leader and has the right permissions
if ($_SESSION['user_type'] != 'leader') {
    $_SESSION['error_message'] = 'You do not have permission to delete users.';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

// Getting the user ID from the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Checking if userId is valid
    if (!filter_var($userId, FILTER_VALIDATE_INT)) {
        $_SESSION['error_message'] = 'Invalid user ID provided.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    // Starting a transaction
    $conn->begin_transaction();

    try {
        // Deleting associated records from the availability table
        $stmt = $conn->prepare("DELETE FROM availability WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception('Prepare statement for availability failed: ' . $conn->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute statement for availability failed: ' . $stmt->error);
        }
        $stmt->close();

        // Deleting associated records from the badges table
        $stmt = $conn->prepare("DELETE FROM badges WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception('Prepare statement for badges failed: ' . $conn->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute statement for badges failed: ' . $stmt->error);
        }
        $stmt->close();

        // Deleting associated records from the helperdetails table
        $stmt = $conn->prepare("DELETE FROM helperdetails WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception('Prepare statement for helperdetails failed: ' . $conn->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute statement for helperdetails failed: ' . $stmt->error);
        }
        $stmt->close();

        // Deleting associated records from the pictures table
        $stmt = $conn->prepare("DELETE FROM pictures WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception('Prepare statement for pictures failed: ' . $conn->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute statement for pictures failed: ' . $stmt->error);
        }
        $stmt->close();

        // Deleting associated records from the user_badges table
        $stmt = $conn->prepare("DELETE FROM user_badges WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception('Prepare statement for user_badges failed: ' . $conn->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute statement for user_badges failed: ' . $stmt->error);
        }
        $stmt->close();

        // Deleting the user from the users table
        $stmt = $conn->prepare("DELETE FROM users WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception('Prepare statement for users failed: ' . $conn->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute statement for users failed: ' . $stmt->error);
        }
        $stmt->close();

        // Committing the transaction
        $conn->commit();
        $_SESSION['success_message'] = 'User deleted successfully.';

    } catch (Exception $e) {
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
