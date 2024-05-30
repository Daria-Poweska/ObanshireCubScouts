<!-- Scout Badges -->

<?php
include '../../account/config/config.php';
include '../../partials/header.php';
include '../../partials/navigation.php';

// Getting user ID from session
$userId = $_SESSION['user_id'];

// Querying to get badges and their achievement status for the user
$query = "SELECT b.badge_id, b.badge_name, b.badge_description, b.badge_picture, ub.achieved, ub.awarded_date
          FROM badges b
          LEFT JOIN user_badges ub ON b.badge_id = ub.badge_id AND ub.user_id = ?
          ORDER BY ub.achieved DESC";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
?>

<main class="aboutmain">
    <div class="top d-flex align-items-center" style="background-image: url('assets/Images/Gallery/badges.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2 class="top-heading">Achieved Badges</h2>
        </div>
        <div class="bottom-bar d-flex align-items-center justify-content-center">
            <h3>Discover our wide range of badges! From outdoor skills to community service, there's a badge for every interest.</h3>
        </div>
    </div>

    <div class="container">
        <!-- Achieved Badges Section -->
        <section class="section dashboardcard">
            <div class="container mt-2">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" id="achievedBadges">
                    <?php while ($badge = $result->fetch_assoc()) { ?>
                        <?php if ($badge['achieved']) { ?>
                            <div class="col">
                                <div class="card card-block">
                                    <img src="<?php echo BASE_URL . 'assets/Images/badges/' . $badge['badge_picture']; ?>" class="card-img-top top" alt="<?php echo $badge['badge_name']; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $badge['badge_name']; ?></h5>
                                        <p class="card-text"><?php echo $badge['badge_description']; ?></p>
                                        <p class="card-text"><small class="text-success">Achieved on: <?php echo $badge['awarded_date']; ?></small></p>
                                        <button class="btn-join-us-square" onclick="printBadge('<?php echo BASE_URL . 'assets/Images/badges/' . $badge['badge_picture']; ?>')">Print Badge</button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!-- Badges to Achieve Section -->
        <div class="tobeachieved">
            <h2 class="text-center mb-4">Badges to Achieve</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" id="unachievedBadges">
                <?php
                $result->data_seek(0);
                while ($badge = $result->fetch_assoc()) { ?>
                    <?php if (!$badge['achieved']) { ?>
                        <div class="col">
                            <div class="card card-block">
                                <div class="badge-image-overlay">
                                    <img src="<?php echo BASE_URL . 'assets/Images/badges/' . $badge['badge_picture']; ?>" class="card-img-top top" alt="<?php echo $badge['badge_name']; ?>">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $badge['badge_name']; ?></h5>
                                    <p class="card-text"><?php echo $badge['badge_description']; ?></p>
                                    <p class="card-text"><small class="text-danger">Not achieved yet</small></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include '../../partials/footer.php'; ?>


    <script>
        function printBadge(imageUrl) {
            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>Print Badge</title></head><body style="text-align:center;"><img src="' + imageUrl + '" /></body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>
</main>
