<?php

$hn = "localhost";
$un = "dariadb";
$pw = "MU41m2ohQDutMM85";
$db = "obanshirecubscoutsdb";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db); 

define("BASE_URL", "/ObanshireCubScouts/");
