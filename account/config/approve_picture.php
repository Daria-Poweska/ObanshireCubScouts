<!-- Uploading pending pictures from leader dashboard -->

<?php
include '../../account/config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['picture_id'])) {
    $picture_id = $_POST['picture_id'];
    $query = "UPDATE pictures SET is_approved = 1 WHERE picture_id = $picture_id";
    if ($conn->query($query) === TRUE) {
        $_SESSION['success_message'] = "Picture approved successfully.";
    } else {
        $_SESSION['error_message'] = "Error approving picture: " . $conn->error;
    }
    header("Location: leaderimages");
    exit();
} else {
    header("Location: leaderimages");
    exit();
}
?>