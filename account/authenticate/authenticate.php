<!-- Authentication -->

<?php
define('BASE_URL', 'http://localhost/ObanshireCubScouts/');
require '../account/config/config.php';
session_start();

// Checking if the username and password fields are filled
if (!isset($_POST['username'], $_POST['password'])) {
    $_SESSION['error_message'] = 'Please fill both the username and password field!';
    header('Location: ' . BASE_URL . 'login');
    exit();
}

// Prepareing the SQL statement to retrieve user information
if ($stmt = $conn->prepare('SELECT user_id, password, user_type FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    // Checking if a user with the given username exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $stored_password, $user_type);
        $stmt->fetch();

        // Verifying the password
        if (password_verify($_POST['password'], $stored_password)) {
            // Regenerating the session ID for security
            session_regenerate_id();

            // Storing user information in the session
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['user_type'] = $user_type;

            // Redirecting the user to the appropriate page based on their user type
            switch ($user_type) {
                case 'helper':
                    header('Location: ' . BASE_URL . 'helperindex.php');
                    exit();
                case 'leader':
                    header('Location: ' . BASE_URL . 'leaderindex.php');
                    exit();
                case 'cub':
                    header('Location: ' . BASE_URL . 'scoutindex.php');
                    exit();
                default:
                    $_SESSION['error_message'] = 'Unknown user type!';
                    header('Location: ' . BASE_URL . 'login');
                    exit();
            }
        } else {
            $_SESSION['error_message'] = 'Incorrect password!';
            header('Location: ' . BASE_URL . 'login');
            exit();
        }
    } else {
        $_SESSION['error_message'] = 'Incorrect username!';
        header('Location: ' . BASE_URL . 'login');
        exit();
    }
}