<?php
require_once __DIR__ . '/auth/check-auth.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/config/database.php';


$stats = [
    'contacts' => $pdo->query("SELECT COUNT(*) FROM contact_enquiries")->fetchColumn(),
    'consultations' => $pdo->query("SELECT COUNT(*) FROM consultation_requests")->fetchColumn(),
    'service_enq' => $pdo->query("SELECT COUNT(*) FROM service_enquiries")->fetchColumn(),
    'blogs' => $pdo->query("SELECT COUNT(*) FROM blogs")->fetchColumn(),
    'services' => $pdo->query("SELECT COUNT(*) FROM services")->fetchColumn()
];

$recent_enquiries = $pdo->query("SELECT name, email, 'Contact' as type, created_at FROM contact_enquiries UNION SELECT name, email, 'Consultation' as type, created_at FROM consultation_requests ORDER BY created_at DESC LIMIT 5")->fetchAll();
$recent_blogs = $pdo->query("SELECT title, created_at FROM blogs ORDER BY id DESC LIMIT 5")->fetchAll();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold m-0">Dashboard Overview</h2>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-3"><div class="card bg-primary text-white border-0 shadow-sm p-4 rounded-3"><h6 class="text-uppercase"><i class="bi bi-envelope"></i> Contact Enquiries</h6><h2 class="m-0 fw-bold"><?= $stats['contacts'] ?></h2></div></div>
    <div class="col-md-3"><div class="card bg-success text-white border-0 shadow-sm p-4 rounded-3"><h6 class="text-uppercase"><i class="bi bi-calendar-event"></i> Consultations</h6><h2 class="m-0 fw-bold"><?= $stats['consultations'] ?></h2></div></div>
    <div class="col-md-3"><div class="card bg-info text-white border-0 shadow-sm p-4 rounded-3"><h6 class="text-uppercase"><i class="bi bi-ui-checks"></i> Service Enquiries</h6><h2 class="m-0 fw-bold"><?= $stats['service_enq'] ?></h2></div></div>
    <div class="col-md-3"><div class="card bg-warning text-dark border-0 shadow-sm p-4 rounded-3"><h6 class="text-uppercase"><i class="bi bi-journal-text"></i> Total Blogs</h6><h2 class="m-0 fw-bold"><?= $stats['blogs'] ?></h2></div></div>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-white py-3"><h5 class="m-0 fw-bold">Recent Enquiries</h5></div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-hover m-0">
                    <thead class="table-light"><tr><th>Name</th><th>Type</th><th>Date</th></tr></thead>
                    <tbody>
                        <?php foreach($recent_enquiries as $row): ?><tr><td><?= htmlspecialchars($row['name']) ?></td><td><span class="badge bg-secondary"><?= htmlspecialchars($row['type']) ?></span></td><td><?= date('d M, Y', strtotime($row['created_at'])) ?></td></tr><?php endforeach; ?>
                        <?php if(!$recent_enquiries): ?><tr><td colspan="3" class="text-center text-muted p-3">No recent enquiries.</td></tr><?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-white py-3"><h5 class="m-0 fw-bold">Recent Blog Posts</h5></div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-hover m-0">
                    <thead class="table-light"><tr><th>Title</th><th>Published</th></tr></thead>
                    <tbody>
                        <?php foreach($recent_blogs as $row): ?><tr><td class="fw-medium text-truncate" style="max-width:200px;"><?= htmlspecialchars($row['title']) ?></td><td><?= date('d M, Y', strtotime($row['created_at'])) ?></td></tr><?php endforeach; ?>
                        <?php if(!$recent_blogs): ?><tr><td colspan="2" class="text-center text-muted p-3">No posts yet.</td></tr><?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>