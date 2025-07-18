
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6c26922339.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- Sign In Form -->
         <form action="php/login.php" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            
            <!-- PHP Error/Success Messages -->
            <?php if(isset($_GET['login_error'])): ?>
                <div class="error"><?php echo htmlspecialchars($_GET['login_error']); ?></div>
            <?php endif; ?>
            
            <?php if(isset($_GET['verify_success'])): ?>
                <div class="success"><?php echo htmlspecialchars($_GET['verify_success']); ?></div>
            <?php endif; ?>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="Login" class="btn solid" name="login">
            
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <!-- Sign Up Form -->
          <form action="php/register.php" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            
            <!-- PHP Error/Success Messages -->
            <?php if(isset($_GET['error'])): ?>
                <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
            <?php endif; ?>
            
            <?php if(isset($_GET['success'])): ?>
                <div class="success"><?php echo htmlspecialchars($_GET['success']); ?></div>
            <?php endif; ?>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <input type="submit" class="btn" value="Sign up" name="signup">
            
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here?</h3>
            <p>
              Create an account to access all our features and services. It only takes a minute!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="assets/image/signup.svg" class="image" alt="Sign up illustration">
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an account?</h3>
            <p>
              Welcome back! Sign in to access your personalized dashboard and continue where you left off.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="assets/image/signin.svg" class="image" alt="Sign in illustration">
        </div>
      </div>
   </div>
    <script src="js/script.js"></script>
</body>
</html>