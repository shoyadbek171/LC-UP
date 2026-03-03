<?php
require './config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Access check: only admin and teacher can see students list
if (!in_array($_SESSION['role'], ['admin', 'teacher'])) {
    header('Location: dashboard.php');
    exit;
}

$success = '';
$error = '';

// Add/Edit Student
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_student'])) {
    $id = $_POST['student_id'] ?? null;
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $group_name = trim($_POST['group_name']);
    $password = $_POST['password'] ?? '';
    $role = 'student';

    try {
        if ($id) {
            // Edit
            if (!empty($password)) {
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("UPDATE users SET name = ?, phone = ?, group_name = ?, password = ? WHERE id = ? AND role = 'student'");
                $stmt->execute([$name, $phone, $group_name, $hashed, $id]);
            } else {
                $stmt = $pdo->prepare("UPDATE users SET name = ?, phone = ?, group_name = ? WHERE id = ? AND role = 'student'");
                $stmt->execute([$name, $phone, $group_name, $id]);
            }
            $success = "Student updated successfully!";
        } else {
            // Add
            $hashed = password_hash($password ?: 'student123', PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (name, phone, group_name, password, role) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $phone, $group_name, $hashed, $role]);
            $success = "Student added successfully!";
        }
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}

// Delete Student
if (isset($_GET['delete'])) {
    if ($_SESSION['role'] === 'admin') {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ? AND role = 'student'");
        $stmt->execute([$_GET['delete']]);
        $success = "Student deleted!";
    } else {
        $error = "Only admins can delete students.";
    }
}

// Fetch Students
$stmt = $pdo->prepare("SELECT * FROM users WHERE role = 'student' ORDER BY id DESC");
$stmt->execute();
$students = $stmt->fetchAll();

require "header/header.php";
require "header/lc.php";
?>

<div class="flex items-start">
    <?php require "header/sidebar.php"; ?>

    <main class="flex-1 p-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Students</h1>
                <p class="text-gray-500 text-sm"><?php echo count($students); ?> students registered</p>
            </div>
            <button onclick="openModal()"
                class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition flex items-center gap-2 shadow-lg shadow-blue-200">
                <i class="fa-solid fa-user-plus"></i>
                Add Student
            </button>
        </div>

        <?php if ($success): ?>
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-2">
                <i class="fa-solid fa-check-circle"></i>
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-2">
                <i class="fa-solid fa-exclamation-circle"></i>
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-500 text-xs uppercase">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Phone</th>
                        <th class="px-6 py-4">Created At</th>
                        <th class="px-6 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach ($students as $student): ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-sm">#<?php echo $student['id']; ?></td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xs">
                                        <?php echo substr($student['name'], 0, 1); ?>
                                    </div>
                                    <span class="font-medium text-gray-800"><?php echo htmlspecialchars($student['name']); ?></span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600"><?php echo htmlspecialchars($student['phone']); ?></td>
                            <td class="px-6 py-4 text-sm text-gray-500"><?php echo date('d.m.Y', strtotime($student['created_at'])); ?></td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <button onclick='editStudent(<?php echo json_encode($student); ?>)'
                                        class="text-blue-500 hover:text-blue-700 transition">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <a href="students.php?delete=<?php echo $student['id']; ?>"
                                        onclick="return confirm('Are you sure?')"
                                        class="text-red-400 hover:text-red-600 transition">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<!-- Student Modal -->
<div id="studentModal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center">
    <div class="bg-white rounded-3xl p-8 w-full max-w-md shadow-2xl relative">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <h2 id="modalTitle" class="text-2xl font-bold text-gray-800 mb-6">Add New Student</h2>

        <form method="POST" class="space-y-4">
            <input type="hidden" name="save_student" value="1">
            <input type="hidden" name="student_id" id="student_id">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name" id="modal_name" required
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none transition"
                    placeholder="John Doe">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Group Name</label>
                <input type="text" name="group_name" id="modal_group"
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none transition"
                    placeholder="A25">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="text" name="phone" id="modal_phone" required
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none transition"
                    placeholder="+998901234567">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password (Leave blank to keep current or use 'student123' for new)</label>
                <input type="password" name="password"
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-blue-500 focus:outline-none transition"
                    placeholder="******">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl font-semibold hover:bg-blue-700 transition mt-4 shadow-lg shadow-blue-200">
                Save Student
            </button>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('modalTitle').innerText = 'Add New Student';
        document.getElementById('student_id').value = '';
        document.getElementById('modal_name').value = '';
        document.getElementById('modal_phone').value = '';
        document.getElementById('modal_group').value = '';
        document.getElementById('studentModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('studentModal').classList.add('hidden');
    }

    function editStudent(student) {
        document.getElementById('modalTitle').innerText = 'Edit Student';
        document.getElementById('student_id').value = student.id;
        document.getElementById('modal_name').value = student.name;
        document.getElementById('modal_phone').value = student.phone;
        document.getElementById('modal_group').value = student.group_name || '';
        document.getElementById('studentModal').classList.remove('hidden');
    }
</script>

<?php require "header/footer.php"; ?>