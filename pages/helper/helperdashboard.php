<!-- Helpers Dashboard -->

<?php
include '../../account/config/config.php';
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Checking if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Getting the user ID from the session
$userId = $_SESSION['user_id'];
$errorMessage = '';
$successMessage = '';

// Handling form submission for updating user details
if (isset($_POST['user_details_submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $disclosure_number = $_POST['disclosure_number'];

    // Validating input
    if (empty($username) || empty($email)) {
        $errorMessage = "Username and Email are required fields.";
    } else {
        $conn->begin_transaction();

        // Updating the users table
        $query1 = "UPDATE users SET username=?, name=?, surname=?, email=? WHERE user_id=?";
        $stmt1 = $conn->prepare($query1);
        if (!$stmt1) {
            $errorMessage .= 'Prepare failed for users table: ' . $conn->error;
        }
        $stmt1->bind_param("ssssi", $username, $name, $surname, $email, $userId);
        $stmt1->execute();

        // Checking for errors
        if ($stmt1->error) {
            $errorMessage .= "Error updating user details: " . $stmt1->error;
            $conn->rollback();
        } else {
            // Updating the helperdetails table
            $query2 = "UPDATE helperdetails SET disclosure_number=? WHERE user_id=?";
            $stmt2 = $conn->prepare($query2);
            if (!$stmt2) {
                $errorMessage .= 'Prepare failed for helperdetails table: ' . $conn->error;
            }
            $stmt2->bind_param("si", $disclosure_number, $userId);
            $stmt2->execute();

            // Checking for errors
            if ($stmt2->error) {
                $errorMessage .= "Error updating helper details: " . $stmt2->error;
                $conn->rollback();
            } else {
                $successMessage = "Details updated successfully.";
                $conn->commit();
            }
        }
        $stmt1->close();
        $stmt2->close();
    }
}

// Handling form submission for updating availability
if (isset($_POST['availability_submit'])) {
    $availabilityDays = $_POST['availability_day'];
    $availabilityTime = $_POST['availability'][0];

    // Removing existing availability for the user
    $deleteQuery = "DELETE FROM availability WHERE user_id=?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->close();

    // Inserting new availability data
    $insertQuery = "INSERT INTO availability (user_id, availability_day, availability_time) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    foreach ($availabilityDays as $day) {
        $stmt->bind_param("iss", $userId, $day, $availabilityTime);
        if (!$stmt->execute()) {
            $errorMessage .= "Error inserting availability: " . $stmt->error;
            break;
        }
    }
    $stmt->close();

    if (empty($errorMessage)) {
        $successMessage = "Availability updated successfully.";
    }
}

// Fetching user details from the database
$query = "SELECT username, name, surname, email FROM users WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($username, $name, $surname, $email);
$stmt->fetch();
$stmt->close();

// Fetching helper details from the database
$query2 = "SELECT disclosure_number FROM helperdetails WHERE user_id = ?";
$stmt2 = $conn->prepare($query2);
$stmt2->bind_param("i", $userId);
$stmt2->execute();
$stmt2->bind_result($disclosure_number);
$stmt2->fetch();
$stmt2->close();

// Providing default values if the variables are null
$username = $username ?? '';
$name = $name ?? '';
$surname = $surname ?? '';
$email = $email ?? '';
$disclosure_number = $disclosure_number ?? '';
?>
<?php include '../../partials/leaderheader.php'; ?>
<?php include '../../partials/navbarforlogged.php'; ?>
<main class="aboutmain">
    <div class="container">
        <section class="section dashboard">
            <h1 class="text-center">Helper Dashboard</h1>
            <div class="row">
                <div class="card no-hover">
                    <div class="card-body">
                        <h5 class="card-title no-hover">Availability</h5>
                        <p class="text-muted">Please select the days and times when you are available to help.</p>
                        <?php if (!empty($errorMessage) && isset($_POST['availability_submit'])) { ?>
                            <div class="alert alert-danger"><?= $errorMessage ?></div>
                        <?php } ?>
                        <!-- Availability form -->
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
                        <!-- Form for updating the details -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" value="<?= htmlspecialchars($username) ?>" name="username">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="<?= htmlspecialchars($name) ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" class="form-control" value="<?= htmlspecialchars($surname) ?>" name="surname">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" value="<?= htmlspecialchars($email) ?>" name="email">
                            </div>
                            <div class="form-group">
                                <label>Disclosure Number</label>
                                <input type="text" class="form-control" value="<?= htmlspecialchars($disclosure_number) ?>" name="disclosure_number">
                            </div>
                            <br>
                            <button type="submit" class="btn-join-us-square mb-3" name="user_details_submit">Submit</button>
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
    <?php include '../../partials/footer.php'; ?>
</main>
