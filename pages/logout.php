<?php
session_start();
session_unset();
session_destroy();

// For debugging: comment out the header temporarily and use this
// echo "Logged out successfully"; exit();

// Redirect to the login page
header('Location: login.php');
exit();
