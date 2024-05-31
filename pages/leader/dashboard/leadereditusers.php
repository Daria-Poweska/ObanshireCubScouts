<!-- Editing User Details -->

<?php
include '../../../account/config/config.php';
session_start();
unset($_SESSION['success_message']);
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

if ($user_id === null) {
    echo "User ID not provided.";
    exit();
}

// Retrieving user details from the database based on user_id
$stmt = $conn->prepare('SELECT username, name, surname, email FROM users WHERE user_id = ?');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$stmt->bind_result($username, $name, $surname, $email);
$stmt->fetch();
$stmt->close();

// Checking if the form was submitted to update user details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    // Updating user details in the database
    $updateUser = $conn->prepare('UPDATE users SET username = ?, name = ?, surname = ?, email = ? WHERE user_id = ?');
    $updateUser->bind_param('ssssi', $username, $name, $surname, $email, $user_id);
    if ($updateUser->execute() && $updateUser->affected_rows > 0) {
        $_SESSION['success_message'] = "User details updated successfully";
    }
    $updateUser->close();
}


include '../../../partials/leaderheader.php';
include '../../../partials/navbarforlogged.php';
?>

<!-- Editing User Details Section -->
<main class="aboutmain">
    <div class="container">
        <section class="section dashboard">
            <h1 class="text-center">User Details</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="text-center">
                <ol class="breadcrumb d-inline-flex">
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>leaderusers">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                </ol>
            </nav>
            <!-- End Breadcrumbs -->
            <div class="row">
                <div class="card no-hover">
                    <div class="card-body">
                        <h3 class="card-title no-hover">Update the details of the user below:</h3>
                        <?php if (isset($_SESSION['success_message'])) { ?>
                            <!-- Display success message if set -->
                            <div class="alert alert-success"><?= $_SESSION['success_message'] ?></div>
                            <?php unset($_SESSION['success_message']); // Clear success message after displaying 
                            ?>
                        <?php } ?>
                        <!-- Form for updating user details -->
                        <form action="<?= BASE_URL; ?>edituser/<?= $user_id ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" value="<?= $user_id ?>">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" value="<?= $username ?>" name="username">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="<?= $name ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" class="form-control" value="<?= $surname ?>" name="surname">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" value="<?= $email ?>" name="email">
                            </div>
                            <br>
                            <button type="submit" class="btn-join-us-square">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php include '../../../partials/footer.php'; ?>