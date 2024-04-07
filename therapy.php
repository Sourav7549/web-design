<?php require('connection.php'); 
session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
{
    $username = $_SESSION['username'];

}
else
{
    header("Location: profile.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="aos.css" />
    <!-- it will load fast so i have pasted in file -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styles.css"/>

    <title>Beaver</title>
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<?php include('header.php'); ?>
    <section class="section blog" id="blog" aria-label="blog">
        <div class="container" style="margin-top: 200px;">
        <h2 class="section-subtitle"> Therapies </h2>
        <p class="section-text">
            Our Therapies
        </p>
        <ul class="blog-list has-scrollbar">

            <li class="scrollbar-item">
            <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 416; --height: 240;">
                <img src="./assets/images/1.jpg" width="416" height="240" loading="lazy"
                    alt="Going to the gym for the first time" class="img-cover">  
                </div>

                <div class="card-content">

                <h3 class="h3">
                    <a href="page1.php" class="card-title">Cognitive-Behavioral Therapy</a>
                </h3>

                <p class="card-text">
                    Cognitive behavioural therapy (CBT) is a talking therapy that can help you manage your problems by changing the way you think and behave.
                  </p>

                  <a href="page1.php" class="btn-link has-before">Read More</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/2.jpeg" width="416" height="240" loading="lazy"
                    alt="Parturient accumsan cacus pulvinar magna" class="img-cover">

                  
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="page2.php" class="card-title">Dialectical behavior therapy</a>
                  </h3>

                  <p class="card-text">
                    Dialectical behavior therapy (DBT) is a type of talk therapy (psychotherapy). It’s based on cognitive behavioral therapy (CBT), but it’s specially adapted.
                  </p>

                  <a href="page2.php" class="btn-link has-before">Read More</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/3.jpg" width="416" height="240" loading="lazy" alt="Risus purus namien parturient accumsan cacus" class="img-cover">
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="page3.php" class="card-title">Psychodynamic Therapy</a>
                  </h3>

                  <p class="card-text">
                    Praesent id ipsum pellentesque lectus dapibus condimentum curabitur eget risus quam. In hac
                    habitasse platea dictumst.
                  </p>

                  <a href="page3.php" class="btn-link has-before">Read More</a>

                </div>

              </div>
            </li>
            <li class="scrollbar-item">
              <div class="blog-card">
    
                <div class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/4.jpeg" width="416" height="240" loading="lazy"
                    alt="Going to the gym for the first time" class="img-cover">
    
                
                </div>
    
                <div class="card-content">
    
                  <h3 class="h3">
                    <a href="page4.php" class="card-title">Mentalization-Based Therapy</a>
                  </h3>
    
                  <p class="card-text">
                    Praesent id ipsum pellentesque lectus dapibus condimentum curabitur eget risus quam. In hac
                    habitasse platea dictumst.
                  </p>
    
                  <a href="page4.php" class="btn-link has-before">Read More</a>
    
                </div>
    
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="blog-card">
    
                <div class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/5.webp" width="416" height="240" loading="lazy"
                    alt="Going to the gym for the first time" class="img-cover">
    
                
                </div>
    
                <div class="card-content">
    
                  <h3 class="h3">
                    <a href="page5.php" class="card-title">Mindfulness-based therapy</a>
                  </h3>
    
                  <p class="card-text">
                    Praesent id ipsum pellentesque lectus dapibus condimentum curabitur eget risus quam. In hac
                    habitasse platea dictumst.
                  </p>
    
                  <a href="page5.php" class="btn-link has-before">Read More</a>
    
                </div>
    
              </div>
            </li>
          </ul>

        </div>
    </section>
    <br/>
    <br/>

    <section class="section__container doctors__container">
        <div class="doctors__header">
          <div class="doctors__header__content">
            <h2 class="section__header">Our Special Doctors</h2>
           
            <p>
              We take pride in our exceptional team of doctors, each a specialist in their respective fields.
            </p>
          </div>
          <div class="doctors__nav">
            <span><i class="ri-arrow-left-line"></i></span>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <div class="doctors__grid">
          <div class="doctors__card">
            <div class="doctors__card__image">
              <img src="assets/doctor-1.jpg" alt="doctor" />
              <div class="doctors__socials">
                <span><i class="ri-instagram-line"></i></span>
                <span><i class="ri-facebook-fill"></i></span>
                <span><i class="ri-heart-fill"></i></span>
                <span><i class="ri-twitter-fill"></i></span>
              </div>
            </div>
            <h4>Dr. Sourav Singh</h4>
            <p>Mental health counselor</p>
          </div>
          <div class="doctors__card">
            <div class="doctors__card__image">
              <img src="assets/doctor-2.jpg" alt="doctor" />
              <div class="doctors__socials">
                <span><i class="ri-instagram-line"></i></span>
                <span><i class="ri-facebook-fill"></i></span>
                <span><i class="ri-heart-fill"></i></span>
                <span><i class="ri-twitter-fill"></i></span>
              </div>
            </div>
            <h4>Dr. Sanjay saini</h4>
            <p>Psychologist</p>
          </div>
          <div class="doctors__card">
            <div class="doctors__card__image">
              <img src="assets/doctor-3.jpg" alt="doctor" />
              <div class="doctors__socials">
                <span><i class="ri-instagram-line"></i></span>
                <span><i class="ri-facebook-fill"></i></span>
                <span><i class="ri-heart-fill"></i></span>
                <span><i class="ri-twitter-fill"></i></span>
              </div>
            </div>
           <h4><b>Dr. Yashika Yadav</b></h4>
            <p>Psychoanalyst</p>
          </div>
        </div>
    </section>

	<!-- Footer -->
	<?php include_once("footer.php"); ?>
	<!-- Footer End -->
    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.js"></script>
    <script src="scripts.js"></script>
</body>

</html>