<?php
require_once __DIR__ . '/../auth/check-auth.php';
require_once __DIR__ . '/../includes/header.php';

// Ensure DB is available even if header doesn't preload it
require_once __DIR__ . '/../config/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO settings (setting_key, setting_value) VALUES (?, ?) ON DUPLICATE KEY UPDATE setting_value = ?");
        foreach ($_POST as $key => $value) {
            $stmt->execute([$key, $value, $value]);
        }
        echo "<div class='alert alert-success'>Settings saved successfully!</div>";
    } catch(PDOException $e) { echo "<div class='alert alert-danger'>Error: " . htmlspecialchars($e->getMessage()) . "</div>"; }
}

$settings = [];
$rows = $pdo->query("SELECT * FROM settings")->fetchAll();
foreach($rows as $row) { $settings[$row['setting_key']] = $row['setting_value']; }
?>
<div class="d-flex justify-content-between align-items-center mb-4"><h2 class="fw-bold m-0">General Settings</h2></div>
<div class="card shadow-sm border-0 rounded-3">
    <div class="card-body p-4">
        <form method="post">
            <h5 class="text-primary border-bottom pb-2 mb-3">Company Details</h5>
            <div class="row mb-3"><div class="col-md-6"><label class="form-label fw-bold">Firm Name</label><input type="text" name="firm_name" class="form-control" value="<?= htmlspecialchars($settings['firm_name'] ?? '') ?>"></div><div class="col-md-6"><label class="form-label fw-bold">Website URL</label><input type="url" name="website_url" class="form-control" value="<?= htmlspecialchars($settings['website_url'] ?? '') ?>"></div></div>
            <div class="row mb-3"><div class="col-md-6"><label class="form-label fw-bold">Email Address</label><input type="email" name="email" class="form-control" value="<?= htmlspecialchars($settings['email'] ?? '') ?>"></div><div class="col-md-6"><label class="form-label fw-bold">Google Maps Link</label><input type="url" name="google_maps" class="form-control" value="<?= htmlspecialchars($settings['google_maps'] ?? '') ?>"></div></div>
            <div class="mb-4"><label class="form-label fw-bold">Office Address</label><textarea name="address" class="form-control" rows="2"><?= htmlspecialchars($settings['address'] ?? '') ?></textarea></div>
            
            <h5 class="text-primary border-bottom pb-2 mb-3">Contact & Socials</h5>
            <div class="row mb-3"><div class="col-md-6"><label class="form-label fw-bold">Phone Number</label><input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($settings['phone'] ?? '') ?>"></div><div class="col-md-6"><label class="form-label fw-bold">WhatsApp Number</label><input type="text" name="whatsapp" class="form-control" value="<?= htmlspecialchars($settings['whatsapp'] ?? '') ?>"></div></div>
            <div class="row mb-4"><div class="col-md-4"><label class="form-label fw-bold">Facebook URL</label><input type="url" name="facebook" class="form-control" value="<?= htmlspecialchars($settings['facebook'] ?? '') ?>"></div><div class="col-md-4"><label class="form-label fw-bold">Instagram URL</label><input type="url" name="instagram" class="form-control" value="<?= htmlspecialchars($settings['instagram'] ?? '') ?>"></div><div class="col-md-4"><label class="form-label fw-bold">LinkedIn URL</label><input type="url" name="linkedin" class="form-control" value="<?= htmlspecialchars($settings['linkedin'] ?? '') ?>"></div></div>
            
            <h5 class="text-primary border-bottom pb-2 mb-3">Footer Configuration</h5>
            <div class="mb-4"><label class="form-label fw-bold">Footer Content</label><textarea name="footer_content" class="form-control" rows="3"><?= htmlspecialchars($settings['footer_content'] ?? '') ?></textarea></div>
            
            <button type="submit" class="btn btn-primary px-5 py-2 fw-bold">Save Settings</button>
        </form>
    </div>
</div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>