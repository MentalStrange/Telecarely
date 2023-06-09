<?php
// session_start();
// // to prevent user to back to the login page if he is login
// if (isset($_SESSION['user_id'])) {
//     header('location: patient/patient_index.php');
//     exit();
//}
include_once __DIR__.'/navbar.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecarely</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<!-- start header Section -->

</head>

<body>
    <!-- ************************************ -->
    <!-- header section starts  -->
    <!-- ************************************ -->



    <!-- ************************************ -->
    <!-- end header section -->
    <!-- ************************************ -->


    <!-- ************************************ -->
    <!-- start home section -->
    <!-- ************************************ -->

    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us to Check your body</h3>
                    <p>How is health today, Sounds like not good!<br />Don't worry.
                        Find your doctor online Book as you wish with eDoc. <br />
                        We offer you a free doctor channeling service, Make your
                        appointment now.</p>
                    <a href="signup.php" class="link-btn">Start your examination now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- ************************************ -->
    <!-- end home section -->
    <!-- ************************************ -->




    <!-- ************************************ -->
    <!-- start about section -->
    <!-- ************************************ -->

    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>We believe in providing comprehensive and 
                        compassionate healthcare services to you and your loved ones. 
                        Our team of experienced healthcare professionals is dedicated 
                        to ensuring that you receive the highest quality care in a warm 
                        and welcoming environment.</p>
                    <a href="signup.php" class="link-btn">Start your examination now</a>
                </div>

            </div>

        </div>

    </section>

    <!-- ************************************ -->
    <!-- end about section -->
    <!-- ************************************ -->


    <!-- ************************************ -->
    <!-- start process section -->
    <!-- ************************************ -->

    <section class="process">

        <h1 class="heading">work process</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Check From your Phone</h3>
                <p>Use the website easly from your phone</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Check From your PC</h3>
                <p>Check the website easly from your Personal Computer</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Show your prescription</h3>
                <p>Open your prescription sent from the doctor</p>
            </div>

        </div>

    </section>

    <!-- ************************************ -->
    <!-- end process section -->
    <!-- ************************************ -->


    <!-- ************************************ -->
    <!-- start reviews section -->
    <!-- ************************************ -->


    <section class="reviews" id="reviews">

        <h1 class="heading"> satisfied clients </h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>The online consultation service offered by this website was truly 
                exceptional. From start to finish, the process was seamless and user-friendly.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Mohamed Ramadan</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>It's a great website for communicating with doctors with different specialtiy</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Matilda</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>The website is easy to navigate and the online consultation
                    is straightforward. The doctor who conducted the consultation is professional.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Mohamed Ramadan</h3>
                <span>satisfied client</span>
            </div>

        </div>

    </section>

    <!-- ************************************ -->
    <!-- end reviews section -->
    <!-- ************************************ -->




    <!-- ************************************ -->
    <!-- start footer section -->
    <!-- ************************************ -->


    <section class="footer">

        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+201015775920</p>
                <p>+201015775920</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>BFCAI Benha</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>00:07am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>Mohamed.ramadan2393@gmail.com</p>
            </div>

        </div>

        <div class="credit"> &copy; copyright @ by <span>BFCAI Team</span> </div>


    </section>

    <!-- ************************************ -->
    <!-- end footer section -->
    <!-- ************************************ -->


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
