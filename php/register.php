<?php
require_once __DIR__ . '/config.php';
$pdo = getDBConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $password]);

        header("Location: ../index.php?success=registration_complete");
        exit();
    } catch (PDOException $e) {
        // Optional: log error to a file
        file_put_contents('../error_log.txt', $e->getMessage(), FILE_APPEND);
        header("Location: ../index.php?error=registration_failed");
        exit();
    }
}

header("Location: ../index.php");
exit();
?>
