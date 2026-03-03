<?php
require './config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

if ($_SESSION['role'] !== 'admin') {
    header('Location: dashboard.php');
    exit;
}

// Payment data
$paymentsFile = 'payments_data.json';
$paymentsData = [];
if (file_exists($paymentsFile)) {
    $paymentsData = json_decode(file_get_contents($paymentsFile), true) ?? [];
}
// Save payment
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_payment'])) {
    $newPayment = [
        'id' => uniqid(),
        'student_name' => trim($_POST['student_name']),
        'group' => trim($_POST['group']),
        'amount' => (int)$_POST['amount'],
        'type' => $_POST['type'] ?? 'cash',
        'status' => $_POST['status'] ?? 'paid',
        'month' => $_POST['month'],
        'note' => trim($_POST['note'] ?? ''),
        'created_by' => $_SESSION['user_name'],
        'date' => date('d.m.Y H:i'),
        'timestamp' => time()
    ];
    $paymentsData[] = $newPayment;
    file_put_contents($paymentsFile, json_encode($paymentsData, JSON_PRETTY_PRINT));
    header('Location: payments.php?success=1');
    exit;
}

// Delete
if (isset($_GET['delete'])) {
    $paymentsData = array_filter($paymentsData, fn($item) => ($item['id'] ?? '') !== $_GET['delete']);
    $paymentsData = array_values($paymentsData);
    file_put_contents($paymentsFile, json_encode($paymentsData, JSON_PRETTY_PRINT));
    header('Location: payments.php');
    exit;
}

require "header/header.php";
require "header/lc.php";

// Statistics
$totalIncome = array_sum(array_map(fn($p) => ($p['status'] ?? '') === 'paid' ? ($p['amount'] ?? 0) : 0, $paymentsData));
$totalDebt = array_sum(array_map(fn($p) => ($p['status'] ?? '') === 'debt' ? ($p['amount'] ?? 0) : 0, $paymentsData));
$paidCount = count(array_filter($paymentsData, fn($p) => ($p['status'] ?? '') === 'paid'));
$debtCount = count(array_filter($paymentsData, fn($p) => ($p['status'] ?? '') === 'debt'));

$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
?>

<div class="flex items-start">
    <?php require "header/sidebar.php"; ?>

    <div class="max-w-[1340px] flex-1 flex mt-3 flex-col ml-5 gap-6 mr-5 mb-10">

        <!-- Header -->
        <div class="flex items-center justify-between mt-6">
            <div class="flex items-center gap-3">
                <div class="bg-emerald-100 p-3 rounded-xl">
                    <i class="fa-solid fa-wallet text-emerald-600 text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Payments</h1>
                    <p class="text-gray-500 text-sm">Financial Management</p>
                </div>
            </div>
            <div class="flex gap-3">
                <a href="payments.php?export=1" class="bg-gray-100 text-gray-700 px-4 py-3 rounded-xl hover:bg-gray-200 transition flex items-center gap-2">
                    <i class="fa-solid fa-file-export"></i>
                    Export
                </a>
                <button onclick="document.getElementById('payModal').classList.remove('hidden')"
                    class="bg-emerald-600 text-white px-6 py-3 rounded-xl hover:bg-emerald-700 transition flex items-center gap-2 shadow-lg shadow-emerald-200">
                    <i class="fa-solid fa-plus"></i>
                    Add Payment
                </button>
            </div>
        </div>

        <?php if (isset($_GET['success'])): ?>
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl flex items-center gap-2">
                <i class="fa-solid fa-check-circle"></i>
                Payment saved successfully!
            </div>
        <?php endif; ?>

        <!-- Stats -->
        <div class="grid grid-cols-4 gap-4">
            <div class="rounded-2xl p-5 text-white shadow-lg" style="background: linear-gradient(135deg, #10b981, #059669);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-emerald-100 text-xs">Total Income</p>
                        <p class="text-2xl font-bold mt-1"><?php echo number_format($totalIncome); ?> UZS</p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-xl">
                        <i class="fa-solid fa-arrow-trend-up text-xl"></i>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl p-5 text-white shadow-lg" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-red-100 text-xs">Total Debt</p>
                        <p class="text-2xl font-bold mt-1"><?php echo number_format($totalDebt); ?> UZS</p>
                    </div>
                    <div class="bg-white/20 p-3 rounded-xl">
                        <i class="fa-solid fa-arrow-trend-down text-xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="bg-green-100 p-3 rounded-xl">
                        <i class="fa-solid fa-check text-green-600"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Paid Count</p>
                        <p class="text-2xl font-bold text-gray-800"><?php echo $paidCount; ?></p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="bg-red-100 p-3 rounded-xl">
                        <i class="fa-solid fa-exclamation text-red-600"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Debtors</p>
                        <p class="text-2xl font-bold text-gray-800"><?php echo $debtCount; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payments List -->
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-gray-800">
                    <i class="fa-solid fa-list text-gray-400 mr-2"></i>
                    Payments List
                </h2>
                <div class="flex gap-2">
                    <button onclick="filterPayments('all')" class="px-3 py-1 text-sm rounded-lg bg-blue-100 text-blue-700 font-medium">All</button>
                    <button onclick="filterPayments('paid')" class="px-3 py-1 text-sm rounded-lg hover:bg-green-100 text-gray-600 font-medium">Paid</button>
                    <button onclick="filterPayments('debt')" class="px-3 py-1 text-sm rounded-lg hover:bg-red-100 text-gray-600 font-medium">Debt</button>
                </div>
            </div>

            <?php if (empty($paymentsData)): ?>
                <div class="text-center py-12 text-gray-400">
                    <i class="fa-solid fa-receipt text-4xl mb-3"></i>
                    <p>No payment records yet</p>
                </div>
            <?php else: ?>

                <!-- Table Header -->
                <div class="grid grid-cols-7 gap-2 p-3 text-xs text-gray-500 font-medium bg-gray-50 rounded-xl mb-2">
                    <div>Student</div>
                    <div>Group</div>
                    <div>Month</div>
                    <div>Amount</div>
                    <div>Type</div>
                    <div>Status</div>
                    <div>Actions</div>
                </div>

                <div class="space-y-2" id="paymentsList">
                    <?php
                    $sorted = $paymentsData;
                    usort($sorted, fn($a, $b) => ($b['timestamp'] ?? 0) - ($a['timestamp'] ?? 0));

                    foreach ($sorted as $payment):
                        $isPaid = ($payment['status'] ?? '') === 'paid';
                    ?>
                        <div class="grid grid-cols-7 gap-2 items-center p-3 rounded-xl hover:bg-gray-50 transition payment-row" data-status="<?php echo $payment['status'] ?? 'paid'; ?>">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-user text-blue-600 text-xs"></i>
                                </div>
                                <span class="font-medium text-sm text-gray-800"><?php echo htmlspecialchars($payment['student_name']); ?></span>
                            </div>
                            <div class="text-sm text-gray-600"><?php echo htmlspecialchars($payment['group']); ?></div>
                            <div class="text-sm text-gray-600"><?php echo htmlspecialchars($payment['month']); ?></div>
                            <div class="text-sm font-bold text-gray-800"><?php echo number_format($payment['amount']); ?></div>
                            <div>
                                <span class="text-xs px-2 py-1 rounded-full <?php echo ($payment['type'] ?? '') === 'cash' ? 'bg-yellow-100 text-yellow-700' : 'bg-blue-100 text-blue-700'; ?>">
                                    <?php echo ($payment['type'] ?? '') === 'cash' ? 'Cash' : 'Card'; ?>
                                </span>
                            </div>
                            <div>
                                <span class="text-xs px-2 py-1 rounded-full font-medium <?php echo $isPaid ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?>">
                                    <?php echo $isPaid ? 'Paid' : 'Debt'; ?>
                                </span>
                            </div>
                            <div class="flex gap-2">
                                <a href="payments.php?delete=<?php echo $payment['id']; ?>"
                                    onclick="return confirm('Are you sure you want to delete?')"
                                    class="text-gray-400 hover:text-red-500 transition">
                                    <i class="fa-regular fa-trash-can text-sm"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Payment Modal -->
<div id="payModal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center">
    <div class="bg-white rounded-3xl p-8 w-full max-w-lg shadow-2xl relative">
        <button onclick="document.getElementById('payModal').classList.add('hidden')"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            <i class="fa-solid fa-plus-circle text-emerald-600 mr-2"></i>
            New Payment
        </h2>

        <form method="POST" class="space-y-4">
            <input type="hidden" name="save_payment" value="1">

            <div>
                <label class="block text-sm text-gray-600 mb-1">Student Name</label>
                <input type="text" name="student_name" required
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none"
                    placeholder="Full Name">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Group</label>
                    <input type="text" name="group" required
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none"
                        placeholder="A25">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Month</label>
                    <select name="month" required class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none">
                        <?php foreach ($months as $m): ?>
                            <option value="<?php echo $m; ?>"><?php echo $m; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-1">Amount (UZS)</label>
                <input type="number" name="amount" required
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none"
                    placeholder="500000">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Payment Type</label>
                    <select name="type" class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none">
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Status</label>
                    <select name="status" class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none">
                        <option value="paid">Paid</option>
                        <option value="debt">Debt</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-1">Note (optional)</label>
                <textarea name="note" rows="2"
                    class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none resize-none"
                    placeholder="Additional note..."></textarea>
            </div>

            <button type="submit" class="w-full bg-emerald-600 text-white py-4 rounded-xl font-semibold hover:bg-emerald-700 transition mt-4">
                <i class="fa-solid fa-check mr-2"></i>
                Save
            </button>
        </form>
    </div>
</div>

<script>
    function filterPayments(status) {
        const rows = document.querySelectorAll('.payment-row');
        rows.forEach(row => {
            if (status === 'all' || row.dataset.status === status) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }
</script>

<?php require "header/footer.php"; ?>