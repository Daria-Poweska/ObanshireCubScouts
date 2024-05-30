<?php
include '../../../account/config/config.php';
session_start();

// Get the user_id from the URL parameter
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

// Check if the user_id is provided
if ($user_id === null) {
    // Handle the case when user_id is not provided
    echo "User ID not provided.";
    exit();
}

$stmt = $conn->prepare('SELECT u.user_id, u.username, u.name, u.surname, u.email FROM users u WHERE u.user_id = ?');
$stmt->bind_param('i', $user_id);
$stmt->execute();

// Bind the result
$stmt->bind_result($bound_user_id, $bound_username, $bound_name, $bound_surname, $bound_email);
$stmt->fetch();
$stmt->close();

// Check if the form was submitted to update user details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $updateUser = $conn->prepare('UPDATE users SET username = ?, name = ?, surname = ?, email = ? WHERE user_id = ?');
    $updateUser->bind_param('ssssi', $username, $name, $surname, $email, $user_id);
    if ($updateUser->execute()) {
        if ($updateUser->affected_rows > 0) {
            $_SESSION['successMessage'] = 'User details updated successfully';
            header("Location: " . BASE_URL . "pages/admin/users.php");
            exit();
        }
    } else {
        echo "Error updating user.";
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
                        <?php if (isset($_SESSION['successMessage'])) { ?>
                            <div class="alert alert-success"><?= $_SESSION['successMessage'] ?></div>
                            <?php unset($_SESSION['successMessage']); ?>
                        <?php } ?>
                        <form action="<?= BASE_URL; ?>pages/admin/edituser.php?user_id=<?= $bound_user_id ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" value="<?= $bound_user_id ?>">
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
                            <button type="submit" class="btn-join-us-square">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php include '../../../partials/footer.php'; ?>
