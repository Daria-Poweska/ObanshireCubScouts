<?php
include '../../../account/config/config.php';
session_start();
include '../../../partials/leaderheader.php';
include '../../../partials/navbarforlogged.php';
?>

<main class="aboutmain">
    <div class="container">
        <section class="section dashboard">
            <?php
            // Displaying success message 
            if (isset($_SESSION['success_message'])) {
                echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']);
            }

            // Displaying error message 
            if (isset($_SESSION['error_message'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
            ?>
            <h1 class="text-center">Users</h1>
            <div class="card no-hover">
                <div class="card-body">
                    <h5 class="card-title">Filter Users By Their Role</h5>
                    <div class="row mb-3">
                        <div class="col">
                            <form action="<?= BASE_URL ?>leaderusers" method="get">
                                <div class="input-group">
                                    <select class="form-select" name="filter" id="filter">
                                        <option value="">Select Role</option>
                                        <option value="cub">Scouts</option>
                                        <option value="helper">Helpers/Parents</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" data-label="ID">ID</th>
                                    <th scope="col" data-label="Username">Username</th>
                                    <th scope="col" data-label="Name">Name</th>
                                    <th scope="col" data-label="Surname">Surname</th>
                                    <th scope="col" data-label="Role">Role</th>
                                    <th scope="col" data-label="Email">Email</th>
                                    <th scope="col" data-label="Status">Status</th>
                                    <th scope="col" data-label="Manage" class="text-center">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Retrieving filter value
                                $filter = isset($_GET['filter']) ? $_GET['filter'] : '';

                                // Query based on filter value
                                if ($filter == 'cub' || $filter == 'helper') {
                                    $query = "SELECT * FROM users WHERE user_type = '$filter'";
                                } else {
                                    $query = "SELECT * FROM users WHERE user_type != 'leader'";
                                }

                                // Executing query
                                $users = $conn->query($query);

                                // Fetch and display users
                                while ($user = $users->fetch_assoc()) {
                                    $id = $user['user_id'];
                                    $username = $user['username'];
                                    $name = $user['name'];
                                    $surname = $user['surname'];
                                    $user_type = $user['user_type'];
                                    $email = $user['email'];
                                    $is_active = $user['is_active'];
                                ?>
                                    <tr>
                                        <th scope="row"><?= $id ?></th>
                                        <td><?= $username ?></td>
                                        <td><?= $name ?></td>
                                        <td><?= $surname ?></td>
                                        <td><?= $user_type ?></td>
                                        <td><?= $email ?></td>
                                        <td <?= $is_active == 1 ? '' : 'style="color: red;"' ?>><?= $is_active == 1 ? 'Active' : 'Inactive' ?></td>
                                        <td class="manage-column text-center">
                                        <button onclick="return confirm('Are you sure you want to delete this user?') ? window.location.href='<?= BASE_URL ?>account/config/delete_user.php?id=<?= $id ?>' : false;" type="button" class="btn btn-primary"><i class="bi bi-trash"></i></button>
                                            <button onclick="window.location.href='<?= BASE_URL ?>edituser/<?= $id ?>'" type="button" class="btn btn-success"><i class="bi bi-pen"></i></button>
                                            <?php if ($is_active == 1) : ?>
                                                <button onclick="window.location.href='<?= BASE_URL ?>inactive/<?= $id ?>'" class="btn btn-danger"><i class="bi bi-person-dash"></i></button>
                                            <?php elseif ($is_active == 0) : ?>
                                                <button onclick="window.location.href='<?= BASE_URL ?>active/<?= $id ?>'" class="btn btn-danger"><i class="bi bi-person-plus"></i></button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include '../../../partials/footer.php'; ?>
