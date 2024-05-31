<!-- Making User Inactive -->

<?php
session_start(); 
include '../../account/config/config.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ' . BASE_URL . 'login/');
    exit;
}

$uid = $_GET['user_id'];

// Preparing and execute the SQL statement to deactivate the user
$stmt = $conn->prepare('UPDATE users SET is_active = 0 WHERE user_id = ?');
$stmt->bind_param('i', $uid);

if ($stmt->execute()) {
    $_SESSION['success_message'] = 'User has been deactivated successfully.';
} else {
    $_SESSION['error_message'] = 'Failed to deactivate user.';
}

$stmt->close();

// Redirecting back to the leaderusers page
header("Location: " . BASE_URL . "leaderusers");
exit();
?>
