<?php
require 'config.php';

if (isset($_GET['code'])) {
    $stmt = $pdo->prepare("UPDATE users SET is_verified = 1, verification_code = NULL WHERE verification_code = ?");
    $stmt->execute([$_GET['code']]);
    
    if ($stmt->rowCount() > 0) {
        header("Location: ../index.php?verify_success=Email verified! You can now login");
    } else {
        header("Location: ../index.php?login_error=Invalid verification code");
    }
    exit();
}

header("Location: ../index.php");
?>