
<?php
// User Profile Update Page

session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// TODO: Add logic for users to update their password and email
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
</head>
<body>
    <h2>Update Profile</h2>
    <!-- TODO: Add profile update form here -->
</body>
</html>
