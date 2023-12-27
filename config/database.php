
<?php
// Database configuration

$host = 'localhost'; // Host name
$dbname = 'framework_db'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create users table if it doesn't exist
    $conn->exec("CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role ENUM('admin', 'user') NOT NULL DEFAULT 'user',
        email VARCHAR(100)
    )");

    // Insert default admin user if not exists
    $default_user = 'admin';
    $default_pass = password_hash('admin', PASSWORD_DEFAULT);
    $conn->exec("INSERT INTO users (username, password, role) VALUES ('$default_user', '$default_pass', 'admin')
                 ON DUPLICATE KEY UPDATE username=username");
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
