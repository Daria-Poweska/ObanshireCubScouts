
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
        <h1 class="text-center">Images</h1>
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
              <h5 class="card-title no-hover">Pending Pictures</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Query to select all pending pictures
                    $query = "SELECT * FROM pictures WHERE is_approved = 0";
                    $result = $conn->query($query);

                    // Checking if there are any pending pictures
                    if ($result->num_rows > 0) {
                      // Looping through each picture and displaying in a table row
                      while ($row = $result->fetch_assoc()) {
                        $imagePath = "./assets/Images/Gallery" . $row['img_path'];
                        echo "<tr>";
                        echo "<td><img src='$imagePath' alt='Image' style='max-width: 100px;'></td>";
                        echo "<td>{$row['title']}</td>";
                        echo "<td>{$row['img_description']}</td>";
                        echo "<td class='manage-column'>
                                  <form action='" . BASE_URL . "approvepicture' method='POST' \">
                                    <input type='hidden' name='picture_id' value='{$row['picture_id']}'>
                                    <button type='submit' class='btn-join-us-square'>Approve</button>
                                  </form>
                                  <form action='" . BASE_URL . "deletepicture' method='POST' onsubmit=\"confirmAction(event, 'Are you sure you want to delete this picture?')\">
                                    <input type='hidden' name='picture_id' value='{$row['picture_id']}'>
                                    <button type='submit' class='btn-join-us-square delete'>Delete</button>
                                  </form>
                                </td>";
                        echo "</tr>";
                      }
                    } else {
                      // Displaying message if no pending pictures
                      echo "<tr><td colspan='4'>No pending pictures</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
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
