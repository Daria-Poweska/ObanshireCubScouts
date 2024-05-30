<!-- Upload Images -->

<?php
include '../../account/config/config.php';
session_start();
include '../../partials/leaderheader.php';
include '../../partials/navbarforlogged.php';

// Checking user authorization
if ($_SESSION['user_type'] !== 'helper' && $_SESSION['user_type'] !== 'cub') {
    $_SESSION['error_message'] = 'You are not authorized to access this page.';
    header("Location: " . BASE_URL . "helperindex");
    exit();
}

$errorMessage = '';
$successMessage = '';

// Handling picture submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $title = $_POST['title'];
        $img_description = $_POST['img_description'];
        $category = $_POST['category'];
        $img_path = $_FILES['img_path']['name'];
        $targetDir = "../../assets/Images/Gallery";
        $targetFilePath = $targetDir . basename($img_path);
        $imageFileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

        // Checking if user exists
        $check_user_query = "SELECT * FROM users WHERE user_id = $user_id";
        $result = $conn->query($check_user_query);
        if ($result && $result->num_rows > 0) {
            // Validating file type
            if (in_array($imageFileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES['img_path']['tmp_name'], $targetFilePath)) {
                    // Inserting image details into database
                    $query = "INSERT INTO pictures (user_id, title, img_description, img_path, category) VALUES ('$user_id', '$title', '$img_description', '$img_path', '$category')";
                    if ($conn->query($query) === TRUE) {
                        $successMessage = "Image uploaded successfully and waiting for approval.";
                    } else {
                        $errorMessage = "Error uploading image: " . $conn->error;
                    }
                } else {
                    $errorMessage = "Error uploading image.";
                }
            } else {
                $errorMessage = "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
            }
        } else {
            $errorMessage = "User does not exist.";
        }
    } else {
        $_SESSION['error_message'] = 'You are not logged in.';
        header("Location: " . BASE_URL . "login");
        exit();
    }
}
?>

<main class="aboutmain">
    <div class="container">
        <section class="section dashboard">
            <h1 class="text-center">Upload Pictures</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="text-center">
                <ol class="breadcrumb d-inline-flex">
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>gallery">Gallery</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Upload Picture</li>
                </ol>
            </nav>
            <!-- End Breadcrumbs -->

            <div class="row g-5">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="uploadgallery">
                        <div class="reply-form mx-auto">
                            <h4>Welcome to the Picture Upload Section</h4>
                            <!-- Displaying success message -->
                            <?php if (!empty($successMessage)) : ?>
                                <div class="alert alert-success"><?php echo $successMessage; ?></div>
                            <?php endif; ?>
                            <!-- Displaying error message -->
                            <?php if (!empty($errorMessage)) : ?>
                                <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
                            <?php endif; ?>
                            <p>As a logged-in user, you can contribute by adding new pictures to the gallery. Share your favorite moments and engage with the audience by uploading images of events, activities, and camp memories.</p>
                            <!-- Uploading form -->
                            <form action="<?= BASE_URL ?>shareduploadimages" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Image Title*" name="title" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Image Short Description*" name="img_description" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="category">Select Category</label>
                                        <select name="category" class="form-control" required>
                                            <option value="">Select a category</option>
                                            <option value="Mountains">Mountains</option>
                                            <option value="Camping">Camping</option>
                                            <option value="Activities">Activities</option>
                                            <option value="Hiking">Hiking</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Upload image</label>
                                        <input type="file" name="img_path" required>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn-join-us-square">Upload Image</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include '../../partials/footer.php'; ?>
</main>
