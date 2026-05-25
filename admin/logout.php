<?php
session_start();
session_unset();
session_destroy();
header('Location: /ca-website/admin/login.php');
exit;