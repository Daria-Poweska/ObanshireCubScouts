<!-- EVENTS PAGE -->

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

  <!-- ======= Event Section ======= -->
  <section>
    <div class="container">
      <div class="row g-2">
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

          // Determine the column class based on the counter
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
            echo '            </ul>
                              </div>
                              <div class="read-more mt-auto align-self-end">
                                <a href="#" class="btn-join-us-square event">Read More <i class="bi bi-arrow-right"></i></a>
                              </div>
                            </div>
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
                              </div>
                              <div class="read-more mt-auto align-self-end">
                                <a href="#" class="btn-join-us-square event">Read More <i class="bi bi-arrow-right"></i></a>
                              </div>
                            </div>
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


  <?php
  include '../partials/footer.php'
  ?>