<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['name']) || empty($_POST['surname'])) {
    $_SESSION['error_message'] = 'Please fill all the fields!';
  } else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    if ($stmt = $conn->prepare('SELECT user_id FROM users WHERE username = ? OR email = ?')) {
      $stmt->bind_param('ss', $username, $email);
      $stmt->execute();
      $stmt->store_result();

      if ($stmt->num_rows > 0) {
        // Check if the username or email already exists
        $stmt->bind_result($existingUserId);
        $stmt->fetch();
        if ($existingUserId) {
          $_SESSION['error_message'] = 'Username or email already exists! Please choose another.';
        }
      } else {
        $stmt->close();

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   
        if ($stmt = $conn->prepare("INSERT INTO users (username, email, password, user_type, name, surname) VALUES (?, ?, ?, ?, ?, ?)")) {
          $stmt->bind_param("ssssss", $username, $email, $hashed_password, $userType, $name, $surname);
          if ($stmt->execute()) {
            $_SESSION['success_message'] = 'You have successfully created an account. <a href="' . BASE_URL . 'login">Return to Login page <br></a>';
          } else {
            $_SESSION['error_message'] = 'Failed to create an account. Please try again later.';
          }
        } else {
          $_SESSION['error_message'] = 'Database error!';
        }
      }
    } else {
      $_SESSION['error_message'] = 'Database error!';
    }
  }
}

?>

<main class="aboutmain">
  <div class="top d-flex align-items-center" style="background-image: url('assets/Images/login.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Register</h2>
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
                  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  <p class="text-center small">Enter your personal details to create an account</p>
                  <?php
                  if (isset($_SESSION["error_message"])) {
                    $error = $_SESSION["error_message"];
                    echo "<div class='text-danger text-center'>$error</div>";
                  }
                  if (isset($_SESSION["success_message"])) {
                    $success = $_SESSION["success_message"];
                    echo "<div class='text-success text-center'>$success</div>";
                  }
                  ?>
                  <form class="row g-3 needs-validation" action="<?= BASE_URL ?>register" method="post">
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid email address!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please enter your name!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourSurname" class="form-label">Surname</label>
                      <input type="text" name="surname" class="form-control" id="yourSurname" required>
                      <div class="invalid-feedback">Please enter your surname!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Create Your Username</label>
                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please choose a username</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <label for="userType" class="form-label">Who are you?</label>
                      <select class="form-select" id="userType" name="userType" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="leader">Leader</option>
                        <option value="helper">Helper</option>
                        <option value="cub">Cub</option>
                      </select>
                      <div class="invalid-feedback">Please select your role.</div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn w-100 btnlogin" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?= BASE_URL ?>login">Log in</a></p>
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
</main>



<?php
include '../partials/footer.php';
unset($_SESSION["error_message"]);
unset($_SESSION["success_message"]);
?>
