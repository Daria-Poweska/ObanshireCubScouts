<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $_SESSION['error_message'] = 'Please fill both the username and password fields!';
  } else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($stmt = $conn->prepare('SELECT user_id, password, user_type FROM users WHERE username = ?')) {
      $stmt->bind_param('s', $username);
      $stmt->execute();
      $stmt->store_result();
      if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $stored_password, $user_type);
        $stmt->fetch();
        // Verify the password
        if (password_verify($password, $stored_password)) {
          session_regenerate_id();
          $_SESSION['loggedin'] = true;
          $_SESSION['id'] = $id;
          $_SESSION['user_id'] = $id; // Set the user_id session variable
          $_SESSION['user_type'] = $user_type;
          switch ($user_type) {
            case 'leader':
              header('Location: ' . BASE_URL . 'leaderindex');
              exit();
            case 'helper':
              header('Location: ' . BASE_URL . 'helperindex');
              exit();
            case 'cub':
              header('Location: ' . BASE_URL . 'scoutindex');
              exit();
            default:
              $_SESSION['error_message'] = 'Unknown user type!';
              break;
          }
        } else {
          $_SESSION['error_message'] = 'Incorrect password!';
        }
      } else {
        $_SESSION['error_message'] = 'Incorrect username!';
      }
    } else {
      $_SESSION['error_message'] = 'Database error!';
    }
  }
}
?>

<main class="aboutmain">
  <div class="top d-flex align-items-center" style="background-image: url('assets/Images/Gallery/login.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Login</h2>
    </div>
    <div class="bottom-bar d-flex align-items-center justify-content-center">
      <h3>Join our community and get access to exciting events, activities, and camp memories. Login or register now to get started on your Cub Scouts journey!</h3>
    </div>
  </div>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="card mb-3">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  <p class="text-center small">Enter your username & password to login</p>
                  <?php
                  if (isset($_SESSION["error_message"])) {
                    $error = $_SESSION["error_message"];
                    echo "<div class='text-danger text-center'>$error</div>";
                  }
                  ?>
                  <form class="row g-3 needs-validation" action="<?= BASE_URL ?>login" method="post">
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn-join-us-square login" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="<?= BASE_URL ?>register">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>




<?php
include '../partials/footer.php';
unset($_SESSION["error_message"]);
?>