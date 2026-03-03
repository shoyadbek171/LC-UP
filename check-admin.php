<?php
require './config.php';

echo "<style>
body { font-family: Arial; padding: 40px; background: #f5f5f5; }
.box { background: white; padding: 30px; border-radius: 15px; max-width: 800px; margin: 0 auto; box-shadow: 0 5px 20px rgba(0,0,0,0.1); }
h1 { color: #1f2937; border-bottom: 3px solid #3b82f6; padding-bottom: 10px; }
.admin-card { background: #f9fafb; border: 2px solid #e5e7eb; padding: 20px; border-radius: 10px; margin: 15px 0; }
.info-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #e5e7eb; }
.info-row:last-child { border-bottom: none; }
.label { font-weight: bold; color: #6b7280; }
.value { color: #1f2937; font-family: monospace; }
.success { color: #10b981; }
.error { color: #ef4444; }
</style>";

echo "<div class='box'>";
echo "<h1>🔍 Admin Tekshiruvi</h1>";

try {
    // Database ulanishni tekshirish
    echo "<p class='success'>✅ Database ulanish: Muvaffaqiyatli</p>";
    
    // Adminlar sonini tekshirish
    $count_stmt = $pdo->query("SELECT COUNT(*) as total FROM users");
    $count = $count_stmt->fetch();
    echo "<p><strong>Jami adminlar:</strong> {$count['total']} ta</p><hr>";
    
    // Barcha adminlarni ko'rsatish
    $stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
    $admins = $stmt->fetchAll();
    
    if (count($admins) > 0) {
        echo "<h2>📋 Adminlar Ro'yxati:</h2>";
        foreach ($admins as $admin) {
            echo "<div class='admin-card'>";
            echo "<div class='info-row'><span class='label'>ID:</span><span class='value'>{$admin['id']}</span></div>";
            echo "<div class='info-row'><span class='label'>Ism:</span><span class='value'>{$admin['full_name']}</span></div>";
            echo "<div class='info-row'><span class='label'>Username:</span><span class='value'>{$admin['username']}</span></div>";
            echo "<div class='info-row'><span class='label'>Email:</span><span class='value'>{$admin['email']}</span></div>";
            echo "<div class='info-row'><span class='label'>Phone:</span><span class='value'>{$admin['phone']}</span></div>";
            echo "<div class='info-row'><span class='label'>Rol:</span><span class='value'>{$admin['role']}</span></div>";
            echo "<div class='info-row'><span class='label'>Status:</span><span class='value " . ($admin['status'] == 'active' ? 'success' : 'error') . "'>{$admin['status']}</span></div>";
            echo "<div class='info-row'><span class='label'>Parol Hash:</span><span class='value' style='font-size: 10px;'>" . substr($admin['password'], 0, 50) . "...</span></div>";
            
            // Parolni test qilish
            $test_password = 'admin123';
            if (password_verify($test_password, $admin['password'])) {
                echo "<div class='info-row'><span class='label'>Parol Test:</span><span class='value success'>✅ 'admin123' ishlaydi</span></div>";
            } else {
                echo "<div class='info-row'><span class='label'>Parol Test:</span><span class='value error'>❌ 'admin123' ishlamaydi</span></div>";
            }
            
            echo "</div>";
        }
    } else {
        echo "<p class='error'>❌ Adminlar topilmadi!</p>";
        echo "<p>Yangi admin yaratish uchun <a href='create-new-admin.php' style='color: #3b82f6;'>bu yerni</a> bosing</p>";
    }
    
} catch (PDOException $e) {
    echo "<p class='error'>❌ Xatolik: " . $e->getMessage() . "</p>";
}

echo "</div>";
?>