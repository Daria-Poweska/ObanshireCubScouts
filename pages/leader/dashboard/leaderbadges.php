<!-- Badges -->

<?php
include '../../../account/config/config.php';
session_start();

// Handling form submission for assigning a badge
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cub_id = $_POST['cub_id'];
    $badge_id = $_POST['badge_id'];

    // Checking if the badge is already assigned to the cub
    $query = "SELECT * FROM user_badges WHERE user_id = $cub_id AND badge_id = $badge_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['error_message'] = "The selected badge has already been assigned to this cub.";
    } else {
        // Inserting a new record into the user_badges table with achieved = 1
        $query = "INSERT INTO user_badges (user_id, badge_id, achieved, awarded_date) VALUES ($cub_id, $badge_id, 1, CURRENT_DATE())";
        $conn->query($query);
        $_SESSION['success_message'] = "Badge assigned successfully.";
    }
}

include '../../../partials/leaderheader.php';
include '../../../partials/navbarforlogged.php';
?>

<main class="aboutmain">
    <div class="container">
        <section class="section dashboard">
            <h1 class="text-center">Badges</h1>
            <?php
            // Displaying success message if set
            if (isset($_SESSION['success_message'])) {
                echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']);
            }
            // Displaying error message if set
            if (isset($_SESSION['error_message'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
            ?>
            <div class="row">
                <div class="card no-hover">
                    <div class="card-body">
                        <h5 class="card-title no-hover">Cubs and Earned Badges</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Cub Name</th>
                                    <th>Earned Badges</th>
                                    <th>Total Achieved Badges</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Querying to select all cubs
                                $query = "SELECT u.user_id, CONCAT(u.name, ' ', u.surname) AS cub_name FROM users u WHERE u.user_type = 'cub'";
                                $result = $conn->query($query);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $cub_id = $row['user_id'];
                                        $cub_name = $row['cub_name'];

                                        // Querying to get earned badges for the current cub
                                        $badge_query = "SELECT b.badge_name FROM user_badges ub JOIN badges b ON ub.badge_id = b.badge_id WHERE ub.user_id = $cub_id AND ub.achieved = 1";
                                        $badge_result = $conn->query($badge_query);
                                        $earned_badges = '';

                                        if ($badge_result->num_rows > 0) {
                                            while ($badge_row = $badge_result->fetch_assoc()) {
                                                $earned_badges .= $badge_row['badge_name'] . ', ';
                                            }
                                            $earned_badges = rtrim($earned_badges, ', ');
                                        } else {
                                            $earned_badges = 'No badges earned yet';
                                        }

                                        // Querying to get the total number of achieved badges for the current cub
                                        $total_badges_query = "SELECT COUNT(*) as total_badges FROM user_badges WHERE user_id = $cub_id AND achieved = 1";
                                        $total_badges_result = $conn->query($total_badges_query);
                                        $total_badges = ($total_badges_result->fetch_assoc())['total_badges'];

                                        echo "<tr>";
                                        echo "<td>$cub_name</td>";
                                        echo "<td>$earned_badges</td>";
                                        echo "<td>$total_badges</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3'>No cubs found</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card no-hover">
                    <div class="card-body">
                        <h5 class="card-title no-hover">Assign Badge to Cub</h5>
                        <form method="POST" action="<?php echo BASE_URL; ?>leaderbadges">
                            <div class="mb-3">
                                <label for="cub_select" class="form-label">Select Cub:</label>
                                <select class="form-select" id="cub_select" name="cub_id" required>
                                    <option value="">Select a Cub</option>
                                    <?php
                                    // Querying to get all cubs
                                    $query = "SELECT user_id, CONCAT(name, ' ', surname) AS cub_name FROM users WHERE user_type = 'cub'";
                                    $result = $conn->query($query);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row['user_id'] . "'>" . $row['cub_name'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="badge_select" class="form-label">Select Badge:</label>
                                <select class="form-select" id="badge_select" name="badge_id" required>
                                    <option value="">Select a Badge</option>
                                    <?php
                                    // Querying to get all available badges
                                    $query = "SELECT badge_id, badge_name FROM badges";
                                    $result = $conn->query($query);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row['badge_id'] . "'>" . $row['badge_name'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <button type="submit" class='btn-join-us-square'>Assign Badge</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include '../../../partials/footer.php'; ?>
