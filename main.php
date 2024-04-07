<?php require('connection.php'); 
session_start();
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
    <link rel="stylesheet" href="styles.css" />
    <title>Beaver</title>
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
	<!-- NavbarStart -->
	<?php include_once("header.php"); ?>
    <!-- NavbarEnds-->
	
    <!-- section 1 -->

    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay">
            <video autoplay muted loop id="myVideo">
                <source src="video/vedio.mp4" type="video/mp4">
            </video>
        </div>
 
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h4 data-aos="fade-up" data-aos-delay="300"
                            style="font-family: 'Lora', serif; font-weight: 600; letter-spacing: 2px;">For your Inner
                            Peace</h4>

                        <h1 data-aos="fade-up" data-aos-delay="500" class="text-black"
                            style="font-family: 'Baloo 2', cursive;">
                            Be Alive. Be Strong. Be Fit. Be Relaxed. Be Happy. Just be.
                        </h1>               
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section 1 ends -->
	
   <!-- section-2 starts -->

        <!-- section-2 sends -->


    <section class="home-about spad" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home_about_pic">
                        <div class="home_about_pic_item large-item set-bg" data-setbg="img/about-1.jpg" data-aos="fade-up"
                            data-aos-delay="300"></div>
                        <div class="home_about_pic_item">
                            <div class="home_about_pic_item_inner set-bg" data-setbg="img/about-2.jpg" data-aos="fade-up"
                                data-aos-delay="400"></div>
                            <div class="home_about_pic_item_inner set-bg" data-setbg="img/about-3.jpg" data-aos="fade-up"
                                data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_about_text" data-aos="fade-up" data-aos-delay="300">
                        <div class="section-title">
                            <h2>Welcome to <br>Beaver</h2>
                        </div>
                  
                        <p>Yoga's incorporation of meditation and breathing can help improve a person's mental well-being.
                         “Regular yoga practice creates mental clarity and calmness; increases body awareness;
                         relieves chronic stress patterns; relaxes the mind; centers attention; and sharpens concentration,”</p>
                        <p class="para-2">
                            As a form of low-impact exercise, yoga has been shown to lower stress hormones in our bodies
                             while simultaneously increasing beneficial brain chemicals like endorphins and GABA (gamma-aminobutyric acid).
                             These feel-good chemicals help decrease anxiety and improve mood.<br>
                            <a href="Assessment.jsp" class="btn custom-btn bg-color mt-3" data-aos="fade-up"
                                data-aos-delay="400">Get Mental Assessment &rarrhk;</a>
                            <a href="therapy.php" class="btn custom-btn bg-color mt-3" data-aos="fade-up"
                                data-aos-delay="400">Get to Know Therapies &rarrhk;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 4 starts -->

    <section class="ftco-section ftco-no-pt ftco-no-pb" id="gallery">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-2">
                <div class="col-md-6 text-center heading-section">
                    <span class="subheading">Gallery</span>
                    <h2 class="mb-4">Our Gallery</h2>
                    <p>
                        Meditation is a practice of mindfulness, or focusing the mind on a particular object, thought, 
                        or activity to train attention and awareness,
                         and achieve a mentally clear and emotionally calm and stable state.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="img/work-1.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="img/work-1.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="img/work-2.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="img/work-2.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="img/work-3.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="img/work-3.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="img/work-4.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="img/work-4.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="img/work-5.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="img/work-5.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="img/work-6.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="img/work-6.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="img/work-7.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="img/work-7.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="img/work-8.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="img/work-8.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- section 4 ends -->

    <!-- section 5 starts -->

    <section class="class section style-cards" id="class">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <h6 data-aos="fade-up">Get a Perfect Body</h6>
                    <h1 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h1>
                </div>

                <div class="card-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="desc-3">
                        <h3 class="mb-2">Yoga Training</h3>
                        <p>
                            The word “Yoga” essentially means, “that which brings you to reality”. Literally, it means
                            “union.” Union means it
                            brings you to the ultimate reality, where individual manifestations of life are surface
                            bubbles in the process of
                            creation.
                        </p>
                    </div>
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="video/Pexels Videos 2790143.mp4"></video>
                </div>
                <div class="card-2" data-aos="fade-up" data-aos-delay="200">
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="video/production ID_4612365.mp4"></video>

                    <div class="desc-2">
                        <h3 class="mb-2">Cardio Training</h3>
                        <p>
                            Cardio Yoga is a type of yoga class that combines Yoga moves with cardiovascular exercises.
                            The workout takes classic
                            yoga moves and makes them a bit faster, with a more rapid flow between sequences.
                            The non-stop movement gets your heart beating and your muscles burning.
                        </p>
                    </div>
                </div>
                <div class="card-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="desc-3">
                        <h3 class="mb-2">Yoga Training</h3>
                        <p>
                            "Meditation, which is the practice of focused concentration, bringing yourself back to the
                            moment over and over again,
                            actually addresses stress, whether positive or negative." Meditation can also reduce the
                            areas of anxiety, chronic pain,
                            depression, heart disease and high blood pressure.
                        </p>
                    </div>
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="video/1.mp4"></video>
                </div>
            </div>
        </div>
    </section>

    <!-- section 5 ends -->


    <!-- section 6 starts -->
    <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
    {
        echo "<h1 style='text-align:center; margin-top:200px'>Welcome, " . $_SESSION['username'] . "</h1>";
    }
  ?>

    <!-- section 6 ends -->


    <!-- section 7 starts -->

    <section class="our-team-area section-padding-80-50" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-aos="fade-up" data-aos-delay="200">

                        <h2>Our Team</h2>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member-thumb">
                            <img src="img/19.jpeg" alt="">
                        </div>
                        <h5>Vishal Mishra</h5>
                        <span>Instructor</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member-thumb">
                            <img src="img/20.8.jpg" alt="">
                        </div>
                        <h5>Supriti Singh</h5>
                        <span>Coach</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member-thumb">
                            <img src="img/21.2.jpeg" alt="">
                        </div>
                        <h5>Sourav Singh</h5>
                        <span>Manager</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member-thumb">
                            <img src="img/22.5.jpg" alt="">
                        </div>
                        <h5>Swati Sharma</h5>
                        <span>Trainer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
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