<?php include 'php/reg_process.php'; 
include 'login_header.php'; ?>
<br><br><br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<center>
    <div class="btns">
                    <a href="#" class="login-btn">Login</a>
                    <a href="#" class="sign-up-btn">Sign Up</a>
                </div>
                <div class="side-login">
            <!--cancel-btn--------------->
            <a href="#" class="login-cancel-btn">
                <i class="fas fa-times"></i>
            </a>
            <h1>Login</h1>
            <form method="POST" action="index.php">
                
                <?php include('php/reg_errors.php'); // Display errors here ?>
                <div class="email">
                    <i class="far fa-paper-plane"></i>
                <input type="text" name="login" placeholder="Username or Email"><br>
                </div>
                <div class="password">
                    <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password"><br><br>
                </div>
                <input type="submit" name="submit" class="login" value="Login"><br><br>
                <p>Not a member yet?<br><a href="register.php">Register here</a></p>
            </form>
            <div class="relative-text">
            <span>Welcome To This Site</span>
            <p>We will only ask you for information necessary to make the purchase process faster and easier.</p>
        </div>
        </div>
                </ul>
            </div>
        
</center>



<br><br><br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
    <center> 

    <div class="side-sign-up">
        <!--cancel-btn--------------->
        <a href="#" class="sign-up-cancel-btn">
            <i class="fas fa-times"></i>
        </a>
    <h1>Register</h1>
        <form method="POST">
        <?php include 'php/reg_errors.php'; ?>
        <div class="name">
        
                <i class="far fa-copy"></i>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Firstname"><br>
            </div>
            <div class="name">
                <i class="far fa-copy"></i>
            <input type="text" name="lastname" placeholder="Lastname"><br>
            </div>
            <div class="name">
                <i class="far fa-copy"></i>
            <input type="text" name="username" placeholder="Username"><br>
            </div>
            <div class="email">
                <i class="far fa-paper-plane"></i>
            <input type="text" name="email" placeholder="Email"><br>
            </div>
            <div class="password">
                <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password"><br><br>
            </div>
            <input type="submit" name="register"class="sign-up" value="Create my account"><br><br>
            <p>Already have an account?<br><a href="login.php">Sign in</a></p>       
        </form>
        <div class="relative-text">
        <span>Sign Up For Better Experience</span>
        <p> </p>
    </div>
    </div>
    </center>
    <footer class="small bg-info">
    <div class="container">
    <ul class="list-inline mb-0">
        <li class="list-inline-item text-light">&copy; 2021 Gay Lloyrd Company</li>
        <li class="list-inline-item"><a href="#" class="text-light">Privacy Policy</a></li>
        </ul>
    </div>
</footer>


