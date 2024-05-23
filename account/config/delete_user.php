<!-- Deleting the user -->

<?php
session_start(); 
include '../../account/config/config.php';

if (isset($_GET['user_id'])) {
    $userId = $_GET['user_id'];
    $deleteUser = $conn->prepare('DELETE FROM users WHERE users.user_id = ?');
    $deleteUser->bind_param('i', $userId);
    $deleteUser->execute();

    header("Location: " . BASE_URL . "leaderusers");
} else {

    echo "User ID not provided.";
}
