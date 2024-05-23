<?php
include '../../account/config/config.php';
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_SESSION['error_message'])) {
    echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
    unset($_SESSION['error_message']);
}

// Check if the user is logged in and is a helper
if (isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'helper') {
    $helper_id = $_SESSION['user_id'];

    // Check if the form for availability has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['availability_submit'])) {
        if (!empty($_POST['availability_day'])) {
            $availability_days = $_POST['availability_day'];
            $availability = $_POST['availability'];

            foreach ($availability_days as $index => $day) {
                $availability_day = $availability_days[$index];
                $availability_time = $availability[$index];

                // Prepare and bind the SQL statement
                $stmt = $conn->prepare("INSERT INTO helperdetails (helper_id, availability_day, availability) VALUES (?, ?, ?)");
                $stmt->bind_param("iss", $helper_id, $availability_day, $availability_time);

                // Execute the statement
                if ($stmt->execute() === TRUE) {
                    $successMessage = 'Availability saved successfully for ' . $day . ' - ' . $availability_time;
                } else {
                    $errorMessage = 'Error: ' . $stmt->error;
                }

                // Close the statement
                $stmt->close();
            }
        } else {
            $errorMessage = 'Please select at least one day.';
        }
    }

    // Update user details
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_details_submit'])) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        // Prepare the SQL statement
        $stmt = $conn->prepare('UPDATE users SET username = ?, name = ?, surname = ?, email = ? WHERE user_id = ?');
        $stmt->bind_param('ssssi', $username, $name, $surname, $email, $helper_id);

        // Execute the statement
        if ($stmt->execute()) {
            $successMessage = 'User details updated successfully.';
        } else {
            $errorMessage = 'Error updating user details: ' . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    // Fetch user details
    $stmt = $conn->prepare('SELECT u.username, u.name, u.surname, u.email FROM users u WHERE u.user_id = ?');
    $stmt->bind_param('i', $helper_id);
    $stmt->execute();

    // Bind the result
    $stmt->bind_result($bound_username, $bound_name, $bound_surname, $bound_email);
    $stmt->fetch();
    $stmt->close();

    include '../../partials/leaderheader.php';
    include '../../partials/navbarforlogged.php';
} else {
    // Redirect to login page if the user is not logged in as a helper
    header("Location: login.php");
    exit;
}
?>

<main id="main" class="aboutmain">
    <div class="container">
        <section class="section dashboard">
            <h1 class="text-center ">Helper Dashboard</h1>
            <div class="row">
                <div class="card no-hover">
                    <div class="card-body">
                        <h5 class="card-title no-hover">Availability</h5>
                        <p class="text-muted">Please select the days and times when you are available to help.</p>
                        <?php if (!empty($errorMessage) && isset($_POST['availability_submit'])) { ?>
                            <div class="alert alert-danger"><?= $errorMessage ?></div>
                        <?php } ?>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="availability_day">Available Day:</label>

                                <div class="availability-container">
                                    <div class="form-check-helper">
                                        <input class="form-check-input" type="checkbox" name="availability_day[]" value="Monday" id="monday">
                                        <label class="form-check-label" for="monday">Monday</label>
                                    </div>
                                    <div class="form-check-helper">
                                        <input class="form-check-input" type="checkbox" name="availability_day[]" value="Tuesday" id="tuesday">
                                        <label class="form-check-label" for="tuesday">Tuesday</label>
                                    </div>
                                    <div class="form-check-helper">
                                        <input class="form-check-input" type="checkbox" name="availability_day[]" value="Wednesday" id="wednesday">
                                        <label class="form-check-label" for="wednesday">Wednesday</label>
                                    </div>
                                    <div class="form-check-helper">
                                        <input class="form-check-input" type="checkbox" name="availability_day[]" value="Thursday" id="thursday">
                                        <label class="form-check-label" for="thursday">Thursday</label>
                                    </div>
                                    <div class="form-check-helper">
                                        <input class="form-check-input" type="checkbox" name="availability_day[]" value="Friday" id="friday">
                                        <label class="form-check-label" for="friday">Friday</label>
                                    </div>
                                    <div class="form-check-helper">
                                        <input class="form-check-input" type="checkbox" name="availability_day[]" value="Saturday" id="saturday">
                                        <label class="form-check-label" for="saturday">Saturday</label>
                                    </div>
                                    <div class="form-check-helper">
                                        <input class="form-check-input" type="checkbox" name="availability_day[]" value="Sunday" id="sunday">
                                        <label class="form-check-label" for="sunday">Sunday</label>
                                    </div>
                                    <!-- Add more checkboxes for other days -->
                                </div>
                            </div>
                            <div class="form-group col-md-6 position-relative">
                                <label for="availability">Availability:</label>
                                <select class="form-control" name="availability[]" id="availability">
                                    <option value="morning">Morning</option>
                                    <option value="afternoon">Afternoon</option>
                                    <option value="evening">Evening</option>
                                </select>
                                <span class="dropdown-arrow"></span>
                            </div>
                            <button type="submit" class="btn-join-us-square" name="availability_submit">Save Availability</button>
                            <?php if (isset($successMessage) && isset($_POST['availability_submit'])) { ?>
                                <div class="alert alert-success"><?= $successMessage ?></div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card no-hover">
                    <div class="card-body">
                        <h3 class="card-title no-hover">Update your details:</h3>
                        
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" value="<?= $bound_username ?>" name="username">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="<?= $bound_name ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" class="form-control" value="<?= $bound_surname ?>" name="surname">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" value="<?= $bound_email ?>" name="email">
                            </div>
                            <br>
                            <button type="submit" class="btn-join-us-square mb-3" name="user_details_submit">Submit <br></button>
                            <?php if (isset($successMessage) && isset($_POST['user_details_submit'])) { ?>
                                <div style="margin-top: 15px;">
                                    <div class="alert alert-success"><?= $successMessage ?></div>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include '../../partials/footer.php'; ?>
