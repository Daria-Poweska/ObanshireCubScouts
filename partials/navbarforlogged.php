<!-- Navigation -->
<nav id="navbar" class="navbar">
    <ul>
        <!-- Navigation for Guest Users -->
        <?php if (!isset($_SESSION['loggedin'])) : ?>
            <li><a href="<?= BASE_URL ?>index" <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>>Home</a></li>
            <li><a href="<?= BASE_URL ?>events" <?php if ($currentPage == 'events.php') echo 'class="active"'; ?>>Cubs Events</a></li>
            <li><a href="<?= BASE_URL ?>gallery" <?php if ($currentPage == 'gallery.php') echo 'class="active"'; ?>>Gallery</a></li>
            <li><a href="<?= BASE_URL ?>contact" <?php if ($currentPage == 'contact.php') echo 'class="active"'; ?>>Contact</a></li>
            <li><a href="<?= BASE_URL ?>login" <?php if ($currentPage == 'login.php') echo 'class="active"'; ?>>Log In</a></li>
        <?php else : ?>

            <!-- Navigation for Logged-in Leaders -->
            <?php if ($_SESSION['user_type'] == 'leader') : ?>
                <?php
                $currentPage = basename($_SERVER['PHP_SELF']);
                ?>
                <ul>
                    <li><a href="<?= BASE_URL ?>index" <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>>Home</a></li>
                    <li><a href="<?= BASE_URL ?>leaderusers" <?php if ($currentPage == 'leaderusers.php') echo 'class="active"'; ?>>Users</a></li>
                    <li><a href="<?= BASE_URL ?>leaderimages" <?php if ($currentPage == 'leaderimages.php') echo 'class="active"'; ?>>Images</a></li>
                    <li><a href="<?= BASE_URL ?>leaderbadges" <?php if ($currentPage == 'leaderbadges.php') echo 'class="active"'; ?>>Badges</a></li>
                    <li><a href="<?= BASE_URL ?>leaderhelpers" <?php if ($currentPage == 'leaderhelpers.php') echo 'class="active"'; ?>>Helpers</a></li>
                    <li><a href="<?= BASE_URL ?>leaderevents" <?php if ($currentPage == 'leaderevents.php') echo 'class="active"'; ?>>Events</a></li>
                    <li><a href="<?= BASE_URL ?>account/authenticate/logout.php">Log Out</a></li>
                </ul>

                <!-- Navigation for Logged-in Cubs -->
            <?php elseif ($_SESSION['user_type'] == 'cub') : ?>
                <?php
                $currentPage = basename($_SERVER['PHP_SELF']);
                ?>
                <li><a href="<?= BASE_URL ?>index" <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>>Home</a></li>
                <li><a href="<?= BASE_URL ?>events" <?php if ($currentPage == 'events.php') echo 'class="active"'; ?>>Events</a></li>
                <li><a href="<?= BASE_URL ?>gallery" <?php if ($currentPage == 'gallery.php') echo 'class="active"'; ?>>Gallery</a></li>
                         <li><a href="<?= BASE_URL ?>shareduploadimages"<?php if ($currentPage == 'shareduploadimages.php') echo 'class="active"'; ?>>Upolad Images</a></li>
            
                <li><a href="<?= BASE_URL ?>contact" <?php if ($currentPage == 'contact.php') echo 'class="active"'; ?>>Contact</a></li>
                <li><a href="<?= BASE_URL ?>yourbadges" <?php if ($currentPage == 'scoutbadges.php') echo 'class="active"'; ?>>Your Badges</a></li>
                <li><a href="<?= BASE_URL ?>games" <?php if ($currentPage == 'games.php') echo 'class="active"'; ?>>Games</a></li>
                <li><a href="<?= BASE_URL ?>account/authenticate/logout.php">Log Out</a></li>

                <!-- Navigation for Logged-in Helpers -->
            <?php elseif ($_SESSION['user_type'] == 'helper') : ?>
                <?php
                $currentPage = basename($_SERVER['PHP_SELF']);
                ?>
                <li><a href="<?= BASE_URL ?>index" <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>>Home</a></li>
                <li><a href="<?= BASE_URL ?>helperdashboard" <?php if ($currentPage == 'helperdashboard.php') echo 'class="active"'; ?>>Details</a></li>
                <li><a href="<?= BASE_URL ?>training" <?php if ($currentPage == 'training.php') echo 'class="active"'; ?>>Training</a></li>
                <li><a href="<?= BASE_URL ?>shareduploadimages" <?php if ($currentPage == 'shareduploadimages.php') echo 'class="active"'; ?>>Upload Images</a></li>
                <li><a href="<?= BASE_URL ?>account/authenticate/logout.php">Log Out</a></li>
            <?php endif ?>
        <?php endif ?>
    </ul>
</nav>
</div>
</header>