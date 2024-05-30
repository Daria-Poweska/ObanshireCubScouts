<!-- Making User Active -->

<?php
session_start(); 
include '../../account/config/config.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ' . BASE_URL . 'login/');
    exit;
}

$uid = $_GET['user_id'];

// Preparing and executing the SQL statement to activate the user
$stmt = $conn->prepare('UPDATE users SET is_active = 1 WHERE user_id = ?');
$stmt->bind_param('i', $uid);

if ($stmt->execute()) {
    $_SESSION['success_message'] = 'User has been activated successfully.';
} else {
    $_SESSION['error_message'] = 'Failed to activate user.';
}

$stmt->close();

// Redirect back to the leaderusers page
header("Location: " . BASE_URL . "leaderusers");
exit();
?>