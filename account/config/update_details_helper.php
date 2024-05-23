<?php
include '../../account/config/config.php';

// Get the user_id from the query parameter
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

// Check if the user_id is provided
if ($user_id === null) {
    // Handle the case when user_id is not provided
    echo "User ID not provided.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    // Prepare the SQL statement
    $stmt = $conn->prepare('UPDATE users SET username = ?, name = ?, surname = ?, email = ? WHERE user_id = ?');
    $stmt->bind_param('ssssi', $username, $name, $surname, $email, $user_id);

    // Execute the statement
    if ($stmt->execute()) {
        $successMessage = 'User details updated successfully.';
    } else {
        $successMessage = 'Error updating user details: ' . $stmt->error;
    }

    // Close the statement
    $stmt->close();

    // Redirect back to the helperdashboard.php with the success message
    $redirectURL = 'http://' . $_SERVER['HTTP_HOST'] . '/ObanshireCubScouts/pages/helper/helperdashboard.php?success=' . urlencode($successMessage);
    header('Location: ' . $redirectURL);
    exit();
}
?>