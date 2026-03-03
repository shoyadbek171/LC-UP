<?php
require './config.php';

$username = 'shoyadbek';
$new_password = 'admin123';

try {
    // Hash the new password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Update in database
    $sql = "UPDATE admins SET password = :password WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':password' => $hashed_password,
        ':username' => $username
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <title>Password Updated</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .container {
                    background: white;
                    padding: 40px;
                    border-radius: 20px;
                    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
                    max-width: 500px;
                    text-align: center;
                }
                .success-icon {
                    width: 80px;
                    height: 80px;
                    background: #10b981;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 20px;
                    font-size: 40px;
                    color: white;
                }
                h1 {
                    color: #1f2937;
                    margin-bottom: 20px;
                }
                .info {
                    background: #f3f4f6;
                    padding: 20px;
                    border-radius: 10px;
                    margin: 20px 0;
                    text-align: left;
                }
                .info p {
                    margin: 10px 0;
                    display: flex;
                    justify-content: space-between;
                }
                .label {
                    font-weight: bold;
                    color: #6b7280;
                }
                .value {
                    font-family: monospace;
                    background: white;
                    padding: 5px 10px;
                    border-radius: 5px;
                }
                .btn {
                    display: inline-block;
                    margin-top: 20px;
                    padding: 15px 30px;
                    background: #3b82f6;
                    color: white;
                    text-decoration: none;
                    border-radius: 10px;
                    font-weight: bold;
                }
                .btn:hover {
                    background: #2563eb;
                }
                .warning {
                    background: #fef2f2;
                    border: 2px solid #ef4444;
                    padding: 15px;
                    border-radius: 10px;
                    color: #dc2626;
                    margin-top: 20px;
                    font-weight: bold;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='success-icon'>✓</div>
                <h1>✅ Password Updated!</h1>
                
                <div class='info'>
                    <p>
                        <span class='label'>👤 Username:</span>
                        <span class='value'>{$username}</span>
                    </p>
                    <p>
                        <span class='label'>🔑 New Password:</span>
                        <span class='value'>{$new_password}</span>
                    </p>
                </div>
                
                <a href='login.php' class='btn'>Go to Login Page →</a>
                
                <div class='warning'>
                    ⚠️ IMPORTANT: Delete this file immediately!
                </div>
            </div>
        </body>
        </html>";
    } else {
        echo "❌ User not found!";
    }
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
