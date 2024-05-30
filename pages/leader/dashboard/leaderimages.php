<?php
include '../../../account/config/config.php';
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
                                    $query = "SELECT * FROM pictures WHERE is_approved = 0";
                                    $result = $conn->query($query);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $imagePath = "./assets/Images/" . $row['img_path'];
                                            echo "<tr>";
                                            echo "<td><img src='$imagePath' alt='Image' style='max-width: 100px;'></td>";
                                            echo "<td>{$row['title']}</td>";
                                            echo "<td>{$row['img_description']}</td>";
                                            echo "<td class='manage-column'>
                                                        <form action='" . BASE_URL . "approvepicture' method='POST'>
                                                            <input type='hidden' name='picture_id' value='{$row['picture_id']}'>
                                                            <button type='submit' class='btn-join-us-square'>Approve</button>
                                                        </form>
                                                        <form action='" . BASE_URL . "deletepicture' method='POST'>
                                                            <input type='hidden' name='picture_id' value='{$row['picture_id']}'>
                                                            <button type='submit' class='btn-join-us-square delete'>Delete</button>
                                                        </form>
                                                    </td>";
                                            echo "</tr>";
                                        }
                                    } else {
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


<?php include '../../../partials/footer.php'; ?>
