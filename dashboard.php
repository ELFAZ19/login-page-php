<?php
require_once __DIR__ . '/php/config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?error=not_logged_in");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--dark);
        }
        
        .dashboard-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .dashboard-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, var(--primary), var(--success));
        }
        
        h1 {
            color: var(--primary);
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 2.5rem;
        }
        
        .welcome-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #555;
        }
        
        .username {
            color: var(--secondary);
            font-weight: 600;
        }
        
        .logout-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
            text-decoration: none;
            display: inline-block;
        }
        
        .logout-btn:hover {
            background: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }
        
        .illustration {
            width: 200px;
            margin: 30px auto;
            opacity: 0.9;
        }
        
        @media (max-width: 768px) {
            .dashboard-container {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome Back, <span class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></span>!</h1>
        
        <svg class="illustration" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
        
        <p class="welcome-text">
            We're glad to see you again. Your personalized dashboard is ready for you.
        </p>
        
        <a href="php/logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>