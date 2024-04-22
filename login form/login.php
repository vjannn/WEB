<?php 
    include("connection.php");
    include("signup.php");
    include("signin.php");

    if (isset($_GET['error'])) {
        $error_message = $_GET['error'];
        echo "<script>alert('$error_message');</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container" >
        <div class="form-container sign-up">
           <form name="form" action="signup.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="name" id="name" name="name" placeholder="Name" required> 
                <input type="email" id="email" name="email" placeholder="Email" required> 
                <input type="password" id="password" name="password" placeholder="Password" required> 
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form name="form" action="signin.php" method="POST">
                <h1>Sign In</h1>
                <div class="social-icons" >
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" id="email" name="email" placeholder="Email" required><br>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
                <a href="#">Forget Your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>"Join the fun!</h1>
                    <p>"Ready to embark on an epic journey? Join the adventure by signing up now!"</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Students!</h1>
                    <p>"Welcome back! Time to dive back into the excitement. Sign in to continue your journey!</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
