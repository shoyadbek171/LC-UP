<?php
// Database sozlamalari
define('DB_HOST', 'localhost');
define('DB_USER', 'shoyadbek');
define('DB_PASS', 'shoyadbek123!');
define('DB_NAME', 'teacher_app');

// Database ulanish
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Session boshlash
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>