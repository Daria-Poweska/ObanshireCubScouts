<!-- Authentication logic for login -->

<?php
define('BASE_URL', 'http://localhost/ObanshireCubScouts/');
require '../account/config/config.php';
session_start();

if (!isset($_POST['username'], $_POST['password'])) {
    $_SESSION['error_message'] = 'Please fill both the username and password field!';
    header('Location: ' . BASE_URL . 'login');
    exit();
}

if ($stmt = $conn->prepare('SELECT user_id, password, user_type FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $stored_password, $user_type);
        $stmt->fetch();

        if (password_verify($_POST['password'], $stored_password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['user_type'] = $user_type;

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

$_SESSION['error_message'] = $errorMsg;

setcookie("username", $_POST['username'], time() + 86400, "/");
