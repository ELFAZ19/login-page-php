<?php
require_once __DIR__ . '/config.php';

// Destroy session and redirect to login
session_unset();
session_destroy();
header("Location: ../index.php?success=logged_out");
exit();
?>
