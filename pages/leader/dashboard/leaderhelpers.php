<!-- Helpers -->

<?php
include '../../../account/config/config.php';
session_start();
include '../../../partials/leaderheader.php';
include '../../../partials/navbarforlogged.php';
?>

<main class="aboutmain">
    <div class="container">
        <section class="section dashboard">
            <h1 class="text-center mb-4">Helpers</h1>
            <div class="row mb-3">
                <div class="card no-hover">
                    <div class="card-body">
                        <h5 class="card-title no-hover">Helpers and Their Availability</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Helper Name</th>
                                        <th>Availability</th>
                                        <th>Disclosure Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Querying to get helper details and availability
                                    $query = "SELECT u.user_id, CONCAT(u.name, ' ', u.surname) AS helper_name, 
                                                     hd.disclosure_number, a.availability_day, a.availability_time
                                              FROM users u
                                              LEFT JOIN helperdetails hd ON u.user_id = hd.user_id
                                              LEFT JOIN availability a ON u.user_id = a.user_id
                                              WHERE u.user_type = 'helper'
                                              ORDER BY u.user_id, a.availability_day, a.availability_time";
                                    $result = $conn->query($query);
                                    
                                    // Initializing an array to hold helper details
                                    $helpers = [];
                                    
                                    // Fetching query results and organize data
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $userId = $row['user_id'];
                                            
                                            // Checking if the helper is already in the array
                                            if (!isset($helpers[$userId])) {
                                                $helpers[$userId] = [
                                                    'helper_name' => $row['helper_name'],
                                                    'disclosure_number' => $row['disclosure_number'] ? $row['disclosure_number'] : '<span class="text-danger">Disclosure not obtained</span>',
                                                    'availability' => []
                                                ];
                                            }
                                            
                                            // Adding availability to the helper's array
                                            if (!empty($row['availability_day']) && !empty($row['availability_time'])) {
                                                $helpers[$userId]['availability'][] = $row['availability_day'] . ' ' . $row['availability_time'];
                                            }
                                        }
                                    }
                                    
                                    // Displaying helper details in the table
                                    foreach ($helpers as $helper) {
                                        echo "<tr>";
                                        echo "<td>{$helper['helper_name']}</td>";
                                        
                                        // Displaying availability or a message if not set
                                        if (!empty($helper['availability'])) {
                                            echo "<td>" . implode('<br>', $helper['availability']) . "</td>";
                                        } else {
                                            echo "<td class='text-primary'>Helper didn't set the availability</td>";
                                        }
                                        
                                        echo "<td>{$helper['disclosure_number']}</td>";
                                        echo "</tr>";
                                    }

                                    // Displaying a message if no helpers are found
                                    if (empty($helpers)) {
                                        echo "<tr><td colspan='3'>No helpers found</td></tr>";
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
</main>

<?php include '../../../partials/footer.php'; ?>
