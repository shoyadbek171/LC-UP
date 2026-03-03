<?php
require './config.php';

echo "<style>
body { font-family: Arial; padding: 40px; background: #f5f5f5; }
.box { background: white; padding: 30px; border-radius: 15px; max-width: 900px; margin: 0 auto; box-shadow: 0 5px 20px rgba(0,0,0,0.1); }
h1 { color: #1f2937; border-bottom: 3px solid #3b82f6; padding-bottom: 10px; margin-bottom: 20px; }
.user-card { background: #f9fafb; border: 2px solid #e5e7eb; padding: 20px; border-radius: 10px; margin: 15px 0; }
.info-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #e5e7eb; }
.info-row:last-child { border-bottom: none; }
.label { font-weight: bold; color: #6b7280; }
.value { color: #1f2937; font-family: monospace; background: white; padding: 4px 8px; border-radius: 4px; }
.success { color: #10b981; font-weight: bold; }
.error { color: #ef4444; font-weight: bold; }
.warning { background: #fef3c7; border: 2px solid #f59e0b; padding: 15px; border-radius: 10px; margin: 20px 0; }
table { width: 100%; border-collapse: collapse; margin-top: 20px; }
th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e5e7eb; }
th { background: #f3f4f6; font-weight: bold; }
</style>";

echo "<div class='box'>";
echo "<h1>🔍 Users Jadvali Tekshiruvi</h1>";

try {
    // 1. Database ulanish
    echo "<p class='success'>✅ Database ulanish: OK</p><hr>";
    
    // 2. Users jadvalini tekshirish
    $check_table = $pdo->query("SHOW TABLES LIKE 'users'");
    if ($check_table->rowCount() > 0) {
        echo "<p class='success'>✅ 'users' jadvali mavjud</p>";
    } else {
        echo "<p class='error'>❌ 'users' jadvali topilmadi!</p>";
        echo "<p>Jadvalni yaratish uchun <a href='create-users-table.php'>bu yerni bosing</a></p>";
        exit;
    }
    
    // 3. Jadval strukturasini ko'rish
    echo "<h2>📋 Jadval Strukturasi:</h2>";
    $columns = $pdo->query("DESCRIBE users")->fetchAll();
    echo "<table><thead><tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr></thead><tbody>";
    foreach ($columns as $col) {
        echo "<tr>";
        echo "<td><strong>{$col['Field']}</strong></td>";
        echo "<td>{$col['Type']}</td>";
        echo "<td>{$col['Null']}</td>";
        echo "<td>{$col['Key']}</td>";
        echo "<td>{$col['Default']}</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
    
    // 4. Foydalanuvchilar soni
    $count_stmt = $pdo->query("SELECT COUNT(*) as total FROM users");
    $count = $count_stmt->fetch();
    echo "<h2>👥 Jami foydalanuvchilar: {$count['total']} ta</h2><hr>";
    
    // 5. Barcha foydalanuvchilarni ko'rsatish
    if ($count['total'] > 0) {
        $stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC LIMIT 10");
        $users = $stmt->fetchAll();
        
        echo "<h2>📝 Foydalanuvchilar Ro'yxati (oxirgi 10 ta):</h2>";
        
        foreach ($users as $user) {
            echo "<div class='user-card'>";
            echo "<div class='info-row'><span class='label'>ID:</span><span class='value'>{$user['id']}</span></div>";
            echo "<div class='info-row'><span class='label'>Ism:</span><span class='value'>" . ($user['name'] ?? 'N/A') . "</span></div>";
            echo "<div class='info-row'><span class='label'>Phone:</span><span class='value'>" . ($user['phone'] ?? 'N/A') . "</span></div>";
            
            if (isset($user['role'])) {
                $role_color = $user['role'] == 'admin' ? 'color: #ef4444' : 'color: #3b82f6';
                echo "<div class='info-row'><span class='label'>Rol:</span><span class='value' style='{$role_color}'><strong>{$user['role']}</strong></span></div>";
            }
            
            echo "<div class='info-row'><span class='label'>Password Hash:</span><span class='value' style='font-size: 10px;'>" . substr($user['password'], 0, 40) . "...</span></div>";
            
            // Parol test qilish
            $test_passwords = ['123456', 'password', 'admin123', '12345678'];
            $password_works = false;
            foreach ($test_passwords as $test_pass) {
                if (password_verify($test_pass, $user['password'])) {
                    echo "<div class='info-row'><span class='label'>Test Parol:</span><span class='value success'>✅ '{$test_pass}' ishlaydi</span></div>";
                    $password_works = true;
                    break;
                }
            }
            if (!$password_works) {
                echo "<div class='info-row'><span class='label'>Test Parol:</span><span class='value error'>❌ Standart parollar ishlamaydi</span></div>";
            }
            
            echo "</div>";
        }
    } else {
        echo "<div class='warning'>";
        echo "<p class='error'>⚠️ Hech qanday foydalanuvchi topilmadi!</p>";
        echo "<p>Admin yaratish uchun <a href='create-admin-user.php'>bu yerni bosing</a></p>";
        echo "</div>";
    }
    
} catch (PDOException $e) {
    echo "<p class='error'>❌ Xatolik: " . $e->getMessage() . "</p>";
}

echo "</div>";
?>