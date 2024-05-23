<!-- Deleting pending pictures from leader dashboard -->

<?php
include '../../account/config/config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['picture_id'])) {
    $picture_id = $_POST['picture_id'];
    $query = "DELETE FROM pictures WHERE picture_id = $picture_id";
    if ($conn->query($query) === TRUE) {
        $_SESSION['success_message'] = "Picture deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error deleting picture: " . $conn->error;
    }
    header("Location: leaderimages");
    exit();
} else {
    header("Location: leaderimages");
    exit();
}
?>