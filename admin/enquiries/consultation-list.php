<?php
require_once __DIR__ . '/../auth/check-auth.php';
require_once __DIR__ . '/../includes/header.php';

// Ensure DB is available even if header doesn't preload it
require_once __DIR__ . '/../config/database.php';

if (isset($_GET['delete'])) { $stmt = $pdo->prepare("DELETE FROM consultation_requests WHERE id = ?"); $stmt->execute([$_GET['delete']]); echo "<div class='alert alert-success'>Deleted.</div>"; }

$search = $_GET['search'] ?? '';
$query = "SELECT * FROM consultation_requests"; $params = [];
if ($search) { $query .= " WHERE name LIKE ? OR email LIKE ?"; $params = ["%$search%", "%$search%"]; }
$query .= " ORDER BY id DESC";
$stmt = $pdo->prepare($query); $stmt->execute($params); $data = $stmt->fetchAll();
?>
<div class="d-flex justify-content-between align-items-center mb-4"><h2 class="fw-bold m-0">Consultation Requests</h2></div>
<div class="card shadow-sm border-0 rounded-3 mb-4">
    <div class="card-body d-flex justify-content-end"><form method="GET" class="d-flex gap-2 w-25"><input type="text" name="search" class="form-control" placeholder="Search..." value="<?= htmlspecialchars($search) ?>"><button type="submit" class="btn btn-dark"><i class="bi bi-search"></i></button></form></div>
    <div class="table-responsive">
        <table class="table table-hover align-middle m-0">
            <thead class="table-light"><tr><th>ID</th><th>Name</th><th>Contact Info</th><th>Service</th><th>Pref. Time</th><th>Message</th><th>Date</th><th class="text-end pe-4">Action</th></tr></thead>
            <tbody>
                <?php foreach($data as $row): ?><tr><td class="ps-3"><?= $row['id'] ?></td><td class="fw-bold"><?= htmlspecialchars($row['name']) ?></td>
                <td><a href="mailto:<?= htmlspecialchars($row['email']) ?>" class="text-decoration-none"><?= htmlspecialchars($row['email']) ?></a><br><small><?= htmlspecialchars($row['phone']) ?></small></td>
                <td><span class="badge bg-success"><?= htmlspecialchars($row['service']) ?></span></td><td class="text-primary fw-medium"><?= htmlspecialchars($row['preferred_time']) ?></td><td class="text-wrap" style="max-width:250px;"><?= nl2br(htmlspecialchars($row['message'] ?? $row['notes'] ?? '')) ?></td>
                <td><?= date('d M Y, H:i', strtotime($row['created_at'])) ?></td><td class="text-end pe-4"><a href="?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')"><i class="bi bi-trash3"></i></a></td></tr><?php endforeach; ?>
                <?php if(!$data): ?><tr><td colspan="8" class="text-center py-4 text-muted">No records found.</td></tr><?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>