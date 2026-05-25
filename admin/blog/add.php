<?php
require_once __DIR__ . '/../auth/check-auth.php';
require_once __DIR__ . '/../includes/header.php';

// Ensure DB is available even if header doesn't preload it
require_once __DIR__ . '/../config/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO blogs (title, slug, content, status) VALUES (?, ?, ?, ?)");
        $stmt->execute([$_POST['title'], $_POST['slug'], $_POST['content'], $_POST['status'] ?? 1]);
        echo "<div class='alert alert-success'>Blog added! <a href='list.php'>Back to List</a></div>";
    } catch(PDOException $e) { echo "<div class='alert alert-danger'>Error: " . htmlspecialchars($e->getMessage()) . "</div>"; }
}
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold m-0">Add Blog</h2>
    <a href="list.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Cancel</a>
</div>
<div class="card shadow-sm border-0 rounded-3">
    <div class="card-body p-4">
        <form method="post">
            <div class="mb-3"><label class="form-label fw-bold">Title</label><input type="text" name="title" class="form-control" required></div>
            <div class="mb-3"><label class="form-label fw-bold">Slug</label><input type="text" name="slug" class="form-control" required></div>
            <div class="mb-4"><label class="form-label fw-bold">Content</label><textarea name="content" class="form-control" rows="8"></textarea></div>
            <div class="mb-3"><label class="form-label fw-bold">Status</label><select name="status" class="form-control"><option value="1">Active</option><option value="0">Inactive</option></select></div>
            <button type="submit" class="btn btn-primary px-5 py-2 fw-bold">Save Blog</button>
        </form>
    </div>
</div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>