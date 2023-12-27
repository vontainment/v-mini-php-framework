
<?php
// Admin User Management Page

session_start();

// Ensure the user is logged in and is an admin
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

// TODO: Add logic to display, create, and edit users
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
</head>
<body>
    <h2>User Management</h2>
    <!-- TODO: Add user management form here -->
</body>
</html>
