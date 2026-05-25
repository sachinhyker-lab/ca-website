<?php
require_once __DIR__ . '/../auth/check-auth.php';
require_once __DIR__ . '/../includes/header.php';

// Ensure DB is available even if header doesn't preload it
require_once __DIR__ . '/../config/database.php';

if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    echo "<div class='alert alert-success'>Blog deleted.</div>";
}

$search = $_GET['search'] ?? '';
$query = "SELECT * FROM blogs";
$params = [];
if ($search) { $query .= " WHERE title LIKE ?"; $params[] = "%$search%"; }
$query .= " ORDER BY id DESC";
$stmt = $pdo->prepare($query); $stmt->execute($params);
$blogs = $stmt->fetchAll();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold m-0">Manage Blogs</h2>
    <a href="add.php" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add New Blog</a>
</div>
<div class="card shadow-sm border-0 rounded-3 mb-4">
    <div class="card-body d-flex justify-content-end"><form method="GET" class="d-flex gap-2 w-25"><input type="text" name="search" class="form-control" placeholder="Search..." value="<?= htmlspecialchars($search) ?>"><button type="submit" class="btn btn-dark"><i class="bi bi-search"></i></button></form></div>
    <div class="table-responsive">
        <table class="table table-hover align-middle m-0">
            <thead class="table-light"><tr><th>ID</th><th>Title</th><th>Slug</th><th>Status</th><th class="text-end pe-4">Actions</th></tr></thead>
            <tbody>
                <?php foreach($blogs as $row): ?><tr><td class="ps-3"><?= $row['id'] ?></td><td class="fw-bold"><?= htmlspecialchars($row['title']) ?></td><td><?= htmlspecialchars($row['slug']) ?></td><td><?= $row['status'] ? 'Active' : 'Inactive' ?></td><td class="text-end pe-4"><a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-info text-white me-1"><i class="bi bi-pencil-square"></i></a><a href="list.php?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this blog?')"><i class="bi bi-trash3"></i></a></td></tr><?php endforeach; ?>
                <?php if(!$blogs): ?><tr><td colspan="5" class="text-center py-4 text-muted">No blogs found.</td></tr><?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>