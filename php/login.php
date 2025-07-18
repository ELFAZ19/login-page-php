<?php
require_once __DIR__ . '/config.php';
$pdo = getDBConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../dashboard.php");
            exit();
        } else {
            header("Location: ../index.php?error=invalid_credentials");
            exit();
        }
    } catch (PDOException $e) {
        header("Location: ../index.php?error=login_failed");
        exit();
    }
}

header("Location: ../index.php");
exit();
?>
