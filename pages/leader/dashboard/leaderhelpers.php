<?php
include '../../../account/config/config.php';
session_start();
include '../../../partials/leaderheader.php';
include '../../../partials/navbarforlogged.php';
?>

<main class="aboutmain">
    <div class="container">
        <section class="section dashboard">
            <h1 class="text-center mb-4y ">Helpers</h1>
            <div class="row mb-3">
                <div class="card no-hover">
                    <div class="card-body">
                        <h5 class="card-title no-hover">Helpers and Their Availability</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Helper Name</th>
                                    <th>Day</th>
                                    <th>Availability</th>
                                    <th>Disclosure Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT u.user_id, CONCAT(u.name, ' ', u.surname) AS helper_name, hd.availability_day, hd.availability, hd.disclosure_number
                                          FROM users u
                                          LEFT JOIN helperdetails hd ON u.user_id = hd.helper_id
                                          WHERE u.user_type = 'helper'";
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $helper_name = $row['helper_name'];
                                        $availability_day = $row['availability_day'] ?? 'No availability set';
                                        $availability = $row['availability'] ?? 'No availability set';
                                        $disclosure_number = $row['disclosure_number'] ?? 'Disclosure not obtained';
                                        echo "<tr>";
                                        echo "<td>$helper_name</td>";
                                        echo "<td>$availability_day</td>";
                                        echo "<td>$availability</td>";
                                        echo "<td>$disclosure_number</td>";
                                        echo "<td></td>"; // Add an empty cell for the "End Time" column
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>No helpers found</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include '../../../partials/footer.php'; ?>