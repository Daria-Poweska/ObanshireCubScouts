<!-- Changing status of the user to inactive -->

<?php
     session_start(); 
     include '../../account/config/config.php';
     
     $uid = $_GET['user_id'];
     $stmt = $conn->prepare('UPDATE users usr
         set
         usr.is_active = 0
         where user_id = '.$uid.' ');
     
     $stmt->execute();
     header("Location: " . BASE_URL . "leaderusers");
     
 