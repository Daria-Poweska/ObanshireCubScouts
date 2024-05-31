<!-- Events -->

<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';
?>

<main class="aboutmain">
  <div class="top d-flex align-items-center" style="background-image: url('assets/Images/Gallery/img6.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Events</h2>
    </div>
    <div class="bottom-bar d-flex align-items-center justify-content-center">
      <h3>Explore our upcoming events and activities!</h3>
    </div>
  </div>

  <!-- Event Section -->
  <section>
    <div class="container">
      <div class="row g-2">
        <?php if (isset($_SESSION['success_message'])) { ?>
          <!-- Displaying success message if set -->
          <div class="alert alert-success"><?= $_SESSION['success_message'] ?></div>
          <?php unset($_SESSION['success_message']);  ?>
        <?php } ?>

        <?php
        $query = "SELECT * FROM events ORDER BY event_date ASC";
        $result = $conn->query($query);
        $counter = 0;

        while ($row = $result->fetch_assoc()) {
          $imagePath = 'assets/Images/Gallery/' . $row['image'];
          $title = $row['title'];
          $date = date('F j, Y', strtotime($row['event_date']));
          $location = $row['location'];
          $description = $row['description'];
          $activities = explode("\n", $row['activities']);
          $activities_string = $row['activities'];

          if ($counter % 4 == 0) {
            $colClass = 'col-lg-12';
            echo '<div class="' . $colClass . '">
                    <div class="event">
                      <div class="card bg-white p-4 d-flex flex-column h-100">
                        <div class="row align-items-center">
                          <div class="col-lg-6">
                            <img src="' . $imagePath . '" class="card-img-top top" alt="Event Image">
                          </div>
                          <div class="col-lg-6">
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h2 class="title"><a href="#">' . $title . '</a></h2>
                              <p class="date">' . $date . '</p>
                              <div class="content flex-grow-1">
                                <p><strong>Location:</strong> ' . $location . '</p>
                                <p>' . $description . '</p>
                                <p><strong>Activities:</strong></p>
                                <ul>';
            foreach ($activities as $activity) {
              echo '<li>' . trim($activity) . '</li>';
            }
            echo '          </ul>
                              </div>';
            // Adding delete and edit buttons if the user is a leader
            if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'leader') {
              echo '<div class="read-more-container d-flex justify-content-between align-items-center mt-auto">
                      <a href="#" class="btn-join-us-square event">Read More <i class="bi bi-arrow-right"></i></a>
                      <button onclick="if(confirm(\'Are you sure you want to delete this event?\')) { window.location.href=\'' . BASE_URL . 'account/config/delete_event.php?id=' . $row['event_id'] . '\'; }" class="btn btn-danger">Delete</button>
                      <button onclick="editEvent(' . $row['event_id'] . ', \'' . addslashes($title) . '\', \'' . $date . '\', \'' . addslashes($location) . '\', \'' . addslashes($description) . '\', \'' . addslashes($activities_string) . '\', \'' . $row['image'] . '\')" class="btn btn-primary">Edit</button>
                    </div>';
            } else {
              echo '<div class="read-more-container">
                      <a href="#" class="btn-join-us-square event">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>';
            }
            echo '        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
          } else {
            $colClass = 'col-lg-4 d-flex';
            echo '<div class="' . $colClass . '">
                    <div class="event w-100">
                      <div class="card p-4 d-flex flex-column h-100">
                        <div class="row">
                          <div class="col-lg-12">
                            <img src="' . $imagePath . '" class="card-img-top mt-3" alt="Event Image">
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h2 class="title"><a href="#">' . $title . '</a></h2>
                              <p class="date">' . $date . '</p>
                              <div class="content flex-grow-1">
                                <p><strong>Location:</strong> ' . $location . '</p>
                                <p>' . $description . '</p>
                                <p><strong>Activities:</strong></p>
                                <ul>';
            foreach ($activities as $activity) {
              echo '<li>' . trim($activity) . '</li>';
            }
            echo '          </ul>
                              </div>';
            // Adding delete and edit buttons if the user is a leader
            if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'leader') {
              echo '<div class="read-more-container d-flex justify-content-between align-items-center mt-auto">
                      <a href="#" class="btn-join-us-square event">Read More <i class="bi bi-arrow-right"></i></a>
                      <button onclick="if(confirm(\'Are you sure you want to delete this event?\')) { window.location.href=\'' . BASE_URL . 'account/config/delete_event.php?id=' . $row['event_id'] . '\'; }" class="btn btn-danger">Delete</button>

                      <button onclick="editEvent(' . $row['event_id'] . ', \'' . addslashes($title) . '\', \'' . $date . '\', \'' . addslashes($location) . '\', \'' . addslashes($description) . '\', \'' . addslashes($activities_string) . '\', \'' . $row['image'] . '\')" class="btn btn-primary">Edit</button>
                    </div>';
            } else {
              echo '<div class="read-more-container">
                      <a href="#" class="btn-join-us-square event">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>';
            }
            echo '        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
          }
          $counter++;
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Edit Event Modal -->
  <div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editEventModalLabel">Edit Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editEventForm" action="<?= BASE_URL ?>account/config/edit_event.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="editEventId" name="event_id">
            <div class="mb-3">
              <label for="editTitle" class="form-label">Event Title</label>
              <input type="text" class="form-control" id="editTitle" name="title" required>
            </div>
            <div class="mb-3">
              <label for="editDate" class="form-label">Event Date</label>
              <input type="date" class="form-control" id="editDate" name="event_date" required>
            </div>
            <div class="mb-3">
              <label for="editLocation" class="form-label">Event Location</label>
              <input type="text" class="form-control" id="editLocation" name="location" required>
            </div>
            <div class="mb-3">
              <label for="editDescription" class="form-label">Event Description</label>
              <textarea class="form-control" id="editDescription" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="editActivities" class="form-label">Event Activities (comma separated)</label>
              <input type="text" class="form-control" id="editActivities" name="activities" required>
            </div>
            <div class="mb-3">
              <label for="editImage" class="form-label">Event Image</label>
              <input type="file" class="form-control" id="editImage" name="image">
            </div>
            <button type="submit" class="btn-join-us-square event">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include '../partials/footer.php'; ?>
</main>
