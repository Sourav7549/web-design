<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style4.css">
    <title>Beaver Login</title>
</head>

<body>
	
	<input type="hidden" id="status" value="<?php echo isset($_REQUEST["status"]) ? htmlspecialchars($_REQUEST["status"]) : "" ?>">

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="login_register.php" method="post">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <input type="text" placeholder="Full Name" name="full_name">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password" >
                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login_register.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <input type="text" placeholder="Email_or_Username" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>ONE OF US?</h1>
                    <h4>Hi Beaver's !</h4>
                    <p>Empathy in Every Click, Solutions in Every Scroll</p>
                    <button class="hidden" id="login">Sign In</button>
                    <a href="index.php"><button class="hidden" id="index">Home</button></a>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>NEW HERE</h1>
                    <h4>Welcome, To Beaver!</h4>
                    <p>Empathy in Every Click, Solutions in Every Scroll</p>
                    <button class="hidden" id="register">Sign Up</button>
                    <a href="index.php"><button class="hidden" id="index">Home</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="script1.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="alert/dist/sweetalert.css">
    <script type="text/javascript">
    var status = document.getElementById("status").value;
    if(status == "success"){
        swal("Congrats","Account Crated Successfully","success");
    }
    if(status == "failed"){
        swal("Sorry","Wrong Username Or Password","error");
    }
    </script>  
</body>
</html>
