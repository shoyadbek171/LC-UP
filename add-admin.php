<?php
require './config.php';
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name     = trim($_POST['name']);
    $phone    = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];
    $role     = $_POST['role'];

    // ===== VALIDATSIYA =====
    if (empty($name) || empty($phone) || empty($password)) {
        $error = "Fill in all fields!";
    } elseif ($password !== $confirm) {
        $error = "Passwords do not match!";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters long!";
    } else {

        try {

            // Telefon borligini tekshirish
            $check = $pdo->prepare("SELECT id FROM admins WHERE phone = :phone");
            $check->execute([':phone' => $phone]);

            if ($check->rowCount() > 0) {
                $error = "This phone number already exists!";
            } else {

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO admins 
                        (name, phone, password, role, created_at)
                        VALUES 
                        (:name, :phone, :password, :role, NOW())";

                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':name'     => $name,
                    ':phone'    => $phone,
                    ':password' => $hashed_password,
                    ':role'     => $role
                ]);

                $success = "Admin added successfully!";
                header("Refresh:2; url=admins-list.php");
            }
        } catch (PDOException $e) {
            $error = "An error occurred!";
        }
    }
}
