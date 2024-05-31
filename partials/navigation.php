 <!-- Navigation -->
 <?php
    $currentPage = $_SERVER['REQUEST_URI']; ?>
 <nav id="navbar" class="navbar">
     <ul>
         <?php if (!isset($_SESSION['loggedin'])) : ?>
             <li><a href="<?= BASE_URL ?>index" <?= ($currentPage == BASE_URL . 'index' || $currentPage == BASE_URL) ? 'class="active"' : '' ?>>Home</a></li>
             <li><a href="<?= BASE_URL ?>events" <?= ($currentPage == BASE_URL . 'events') ? 'class="active"' : '' ?>>Events</a></li>
             <li><a href="<?= BASE_URL ?>gallery" <?= ($currentPage == BASE_URL . 'gallery') ? 'class="active"' : '' ?>>Gallery</a></li>
             <li><a href="<?= BASE_URL ?>badges" <?= ($currentPage == BASE_URL . 'badges') ? 'class="active"' : '' ?>>Badges</a></li>
             <li><a href="<?= BASE_URL ?>games" <?= ($currentPage == BASE_URL . 'games') ? 'class="active"' : '' ?>>Games</a></li>
             <li><a href="<?= BASE_URL ?>contact" <?= ($currentPage == BASE_URL . 'contact') ? 'class="active"' : '' ?>>Contact</a></li>
             <li class="dropdown">
                 <a href="#"><span>More</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                 <ul>
                     <li><a href="<?= BASE_URL ?>disclosure" <?= ($currentPage == BASE_URL . 'disclosure') ? 'class="active"' : '' ?>>Disclosure Information</a></li>
                     <li><a href="<?= BASE_URL ?>helpers" <?= ($currentPage == BASE_URL . 'helpers') ? 'class="active"' : '' ?>>Volunteering</a></li>
                 </ul>
             </li>
             <li><a class="alogin" href="<?= BASE_URL ?>login" <?= ($currentPage == BASE_URL . 'login') ? 'class="active"' : '' ?>>Log In</a></li>
         <?php else : ?>

             <!-- Navigation for Logged-in Leaders -->
             <?php if ($_SESSION['user_type'] == 'leader') : ?>
                 <li><a href="<?= BASE_URL ?>index" <?= ($currentPage == BASE_URL . 'index' || $currentPage == BASE_URL) ? 'class="active"' : '' ?>>Home</a></li>
                 
                 <li><a href="<?= BASE_URL ?>events" <?= ($currentPage == BASE_URL . 'events') ? 'class="active"' : '' ?>>Events</a></li>
                 <li><a href="<?= BASE_URL ?>gallery" <?= ($currentPage == BASE_URL . 'gallery') ? 'class="active"' : '' ?>>Gallery</a></li>
                 <li><a href="<?= BASE_URL ?>badges" <?= ($currentPage == BASE_URL . 'badges') ? 'class="active"' : '' ?>>Badges</a></li>
                 <li><a href="<?= BASE_URL ?>games" <?= ($currentPage == BASE_URL . 'games') ? 'class="active"' : '' ?>>Games</a></li>
                 <li><a href="<?= BASE_URL ?>contact" <?= ($currentPage == BASE_URL . 'contact') ? 'class="active"' : '' ?>>Contact</a></li>
                 <li class="dropdown">
                     <a href="#"><span>More</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>

                         <li><a href="<?= BASE_URL ?>disclosure" <?= ($currentPage == BASE_URL . 'disclosure') ? 'class="active"' : '' ?>>Disclosure Information</a></li>
                         <li><a href="<?= BASE_URL ?>helpers" <?= ($currentPage == BASE_URL . 'helpers') ? 'class="active"' : '' ?>>Volunteering</a></li>
                     </ul>
                 </li>
                 <li><a href="<?= BASE_URL ?>leaderusers" <?= ($currentPage == BASE_URL . 'leaderusers') ? 'class="active"' : '' ?>>Dashboard</a></li>
                 <li><a href="<?= BASE_URL ?>account/config/logout.php" <?= ($currentPage == BASE_URL . 'account/config/logout.php') ? 'class="active"' : '' ?>>Log Out</a></li>

                 <!-- Navigation for Logged-in Scouts -->
             <?php elseif ($_SESSION['user_type'] == 'cub') : ?>
                 <li><a href="<?= BASE_URL ?>index" <?= ($currentPage == BASE_URL . 'index' || $currentPage == BASE_URL) ? 'class="active"' : '' ?>>Home</a></li>
                 <li><a href="<?= BASE_URL ?>events" <?= ($currentPage == BASE_URL . 'events') ? 'class="active"' : '' ?>>Events</a></li>
                 <li><a href="<?= BASE_URL ?>gallery" <?= ($currentPage == BASE_URL . 'gallery') ? 'class="active"' : '' ?>>Gallery</a></li>
                         <li><a href="<?= BASE_URL ?>shareduploadimages" <?= ($currentPage == BASE_URL . 'shareduploadimages') ? 'class="active"' : '' ?>>Upload Images</a></li>
                 <li><a href="<?= BASE_URL ?>contact" <?= ($currentPage == BASE_URL . 'contact') ? 'class="active"' : '' ?>>Contact</a></li>
                 <li class="dropdown">
                     <a href="#"><span>More</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>

                     <li><a href="<?= BASE_URL ?>scoutbadges" <?= ($currentPage == BASE_URL . 'scoutbadges') ? 'class="active"' : '' ?>>Your Badges</a></li>
                         <li><a href="<?= BASE_URL ?>badges" <?= ($currentPage == BASE_URL . 'badges') ? 'class="active"' : '' ?>>Badges</a></li>
                     </ul>
                 </li>
                 <li><a href="<?= BASE_URL ?>games" <?= ($currentPage == BASE_URL . 'games') ? 'class="active"' : '' ?>>Games</a></li>
                 <li><a href="<?= BASE_URL ?>account/config/logout.php" <?= ($currentPage == BASE_URL . 'account/config/logout.php') ? 'class="active"' : '' ?>>Log Out</a></li>

                 <!-- Navigation for Logged-in Helpers -->
             <?php elseif ($_SESSION['user_type'] == 'helper') : ?>
                 <li><a href="<?= BASE_URL ?>index" <?= ($currentPage == BASE_URL . 'index' || $currentPage == BASE_URL) ? 'class="active"' : '' ?>>Home</a></li>
            
                 <li><a href="<?= BASE_URL ?>events" <?= ($currentPage == BASE_URL . 'events') ? 'class="active"' : '' ?>>Events</a></li>
                 <li><a href="<?= BASE_URL ?>gallery" <?= ($currentPage == BASE_URL . 'gallery') ? 'class="active"' : '' ?>>Gallery</a></li>
                 <li><a href="<?= BASE_URL ?>badges" <?= ($currentPage == BASE_URL . 'badges') ? 'class="active"' : '' ?>>Badges</a></li>
                 <li><a href="<?= BASE_URL ?>games" <?= ($currentPage == BASE_URL . 'games') ? 'class="active"' : '' ?>>Games</a></li>
                 <li><a href="<?= BASE_URL ?>contact" <?= ($currentPage == BASE_URL . 'contact') ? 'class="active"' : '' ?>>Contact</a></li>
                 <li class="dropdown">
                     <a href="#"><span>More</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>

                         <li><a href="<?= BASE_URL ?>disclosure" <?= ($currentPage == BASE_URL . 'disclosure') ? 'class="active"' : '' ?>>Disclosure Information</a></li>
                         <li><a href="<?= BASE_URL ?>helpers" <?= ($currentPage == BASE_URL . 'helpers') ? 'class="active"' : '' ?>>Volunteering</a></li>
                     </ul>
                 </li>
                 <li><a href="<?= BASE_URL ?>helperdashboard" <?= ($currentPage == BASE_URL . 'helperdashboard') ? 'class="active"' : '' ?>>Dashboard</a></li>
                 <li><a href="<?= BASE_URL ?>account/config/logout.php" <?= ($currentPage == BASE_URL . 'account/config/logout.php') ? 'class="active"' : '' ?>>Log Out</a></li>
             <?php endif ?>
         <?php endif ?>
     </ul>
 </nav>
 </div>
 </header>