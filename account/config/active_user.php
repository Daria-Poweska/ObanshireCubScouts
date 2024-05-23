<!-- Changing status of the user to active -->

<?php
session_start(); 
include '../../account/config/config.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../../../login/');
    exit;
}
$uid = $_GET['user_id'];
$stmt = $conn->prepare('UPDATE users usr
    set
    usr.is_active = 1
    where user_id = '.$uid.' ');

$stmt->execute();
header("Location: " . BASE_URL . "leaderusers");
exit();
