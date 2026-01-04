<?php
// -----------------------
// Live Server Error Handling
// -----------------------
ini_set('display_errors', 1);
error_reporting(0);

// ------------------------------
// Database Configuration
// ------------------------------
$host = "localhost";        // Usually localhost
$db_name = "bgmit_admission"; // Database name
$db_user = "root";    // Live server username
$db_pass = ""; // Live server password
$charset = "utf8mb4";        // UTF-8 for proper text handling

// ------------------------------
// Create Connection
// ------------------------------
$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// ------------------------------
// Check Connection
// ------------------------------
if ($conn->connect_error) {
    // Live site: show generic message, don't expose DB info
    die("Database connection failed. Please try again later.");
}

// ------------------------------
// Set charset
// ------------------------------
$conn->set_charset($charset);

// ------------------------------
// Optional: Enable error reporting during development
// Comment out on production
// ------------------------------
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
