<?php
session_start();

$uid = $_SESSION['CustomersID']; // Get the UserID from the session data

// Check if the UserID exists in the session or redirect to login page if not set
if (!isset($uid)) {
    header("Location: login.php");
    exit();
}

?>
