<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style1.css">
    <title>Maintenance Proof</title>
</head>

<body>

    <div class="lang">

        <a href="log_in_EN.php"><button>EN</button></a>
        <a href="log_in_FR.php"><button>FR</button></a>


    </div>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form enctype="multipart/form-data" action="../controller/SignupController.php" method="POST">
                <a class="Logos" id= 'logo_sign'href="https://maintenanceproof.com/"><img src="assets/img/logo1.png" alt="Logo of Maintenance Proof"></a>
                <h1>Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g" style="color: #dbdbdb;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"style="color: #dbdbdb;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"style="color: #dbdbdb;"></i></a>
                </div>
                <span>or use your email and verification code</span>
                <input type="email" id="email" name="email"placeholder="Email">
                <input type="password" id="verification_code" name="verification_code" placeholder="Verification Code">
            
               <input type="submit" class="butt" id="Verification_Submit" name="Verification_Submit" value="Log In">
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
               
                <div class="toggle-panel toggle-right" id="singup">
                    <h2>HI, There!</h2>
                    <p>Please Enter your Verification code to login first time and verify your account</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!--Termes de confdentialité-->
  
    
</body>

</html>