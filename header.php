<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hstyle.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="img/logo (2).png" alt="logo" style="width: 120px;">
    </div>
    <nav>
      <a href="index.php">HOME</a>
      <a href="#about" class="smooth-scroll">ABOUT</a>
      <a href="#gallery" class="smooth-scroll">GALLERY</a>
      <a href="#class" class="smooth-scroll">CLASES</a>
      <a href="#team" class="smooth-scroll">TEAM</a>
      <a href="#contact" class="smooth-scroll">CONTACT</a>
      <a href="#about" class="smooth-scroll">ABOUT</a>
    </nav>
    <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
    {
            echo "<div class='user'>$_SESSION[username] - <a href='logout.php'>LOGOUT</a></div>";
    }
    else
    {
        echo "<div class='sign-in-up'>
        <button type='button' onclick=\"window.open('profile.php','_self')\">LOGIN</button>
        <button type='button' onclick=\"window.open('profile.php','_self')\">REGISTER</button>
        </div>";
    }
    ?>

    </header>
</body>
</html>