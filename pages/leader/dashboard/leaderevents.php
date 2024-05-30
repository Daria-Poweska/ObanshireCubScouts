<?php
include '../../../account/config/config.php';
session_start();

// Enabling error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Displaying error message if set in session
if (isset($_SESSION['error_message'])) {
  echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
  unset($_SESSION['error_message']);
}

include '../../../partials/leaderheader.php';
include '../../../partials/navbarforlogged.php';
?>

<main class="aboutmain">
  <div class="container">
    <section class="section dashboard">
      <h1 class="text-center">Events</h1>
      <?php
      // Displaying success message 
      if (isset($_SESSION['success_message'])) {
        echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
        unset($_SESSION['success_message']);
      }

      // Displaying error message 
      if (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']);
      }
      ?>
      <div class="row">
        <div class="card no-hover">
          <div class="card-body">
            <div class="container my-4">
              <h2>Add New Event</h2>
              <form action="<?= BASE_URL ?>account/config/add_event.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="title" class="form-label">Event Title</label>
                  <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                  <label for="event_date" class="form-label">Event Date</label>
                  <input type="date" class="form-control" id="event_date" name="event_date" required>
                </div>
                <div class="mb-3">
                  <label for="location" class="form-label">Event Location</label>
                  <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Event Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="activities" class="form-label">Event Activities (comma separated)</label>
                  <input type="text" class="form-control" id="activities" name="activities" required>
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Event Image</label>
                  <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Event</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
  include '../../../partials/footer.php';
  ?>
</main>
</body>
</html>
