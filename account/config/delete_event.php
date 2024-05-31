<!-- Deleting Event -->

<?php
include '../../account/config/config.php';
session_start();

// Checking if the user is logged in and is a leader
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'leader') {
    $_SESSION['error_message'] = 'You do not have permission to delete events.';
    header("Location: " . BASE_URL . "events");
    exit();
}

// Checking if event ID is provided
if (isset($_GET['id'])) {
    $eventId = $_GET['id'];

    // Deleting the event from the database
    $stmt = $conn->prepare("DELETE FROM events WHERE event_id = ?");
    $stmt->bind_param("i", $eventId);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = 'Event deleted successfully.';
    } else {
        $_SESSION['error_message'] = 'Failed to delete event.';
    }

    $stmt->close();
} else {
    $_SESSION['error_message'] = 'No event ID provided.';
}

header("Location: " . BASE_URL . "events");
exit();
?>
