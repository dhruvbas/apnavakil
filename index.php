<?php 
if(isset($_POST['submit'])){
    $to = "dhruv.bas@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
   
    $message = $name. " wrote the following:" . "\n\n" . $_POST['message'];

    
    $headers = "From:" . $from;
    mail($to,$subject,$message,$header);
    
    //header('Location: Contact.html'); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Healing With Care</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="shortcut icon" href="ico/favicon.png" />
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1><a href="/index" class="scrollto"><img src="img/logo.png" alt="" title="" style = "height: 35px; width: 40px"/> healing with care</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about-us">About Us</a></li>
          <li><a href="#get-started">Our Services</a></li>
          <li><a href="#blog">Our Approach</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Clear Mind. Better Life</h1>
      <h2>Helping you find answers</h2>
      <img src="img/hero-img.png"  alt="Hero Imgs">
      <a href="#contact" class="btn-get-started scrollto">Book an Appointment</a>
    </div>
  </section><!-- #hero -->
  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">

        <h2>About Us </h2>
      </div>
      <div class="row justify-content-center">

        <div class="col-lg-3">
          <img src="img/about-img.JPG" alt="About">
        </div>

        <div class="col-lg-9">
          

            <h3><span>Sanghamitra Gautam</span>, Registered Psychotherapist, M.Psych., Member of CRPO, OAMHP </h3>
            <p>Sanghamitra Gautam is a Registered Psychotherapist and a  good standing member of Ontario Association of Mental Health Professionals (formerly OACCPP), College of Registered Psychotherapists of Ontario (CRPO), and Canadian Association of Play Therapy (CAPT). She has worked extensively with clients suffering from various substance abuse disorders and serious mental disorders. She has very good interpersonal and communication skills and is fluent in English, Hindi, Assamese and Bengali.

              Sanghamitra has a client-centric approach and is highly proficient in different kinds of individual and group therapy procedures such as behavioral therapy, cognitive behavior therapy, dialectical behavior therapy, acceptance and commitment therapy, emotion focused therapy and supportive therapy to name a few. Sanghamitra believes that sometimes it is easier to express emotions through play than talk and hence also includes various creative play therapy techniques in her sessions  to have deeper understanding of the clients’ emotional state.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--==========================
    What We Offer
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Our Services </h2>
        <p class="separator">We welcome clients who are struggling with</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/addiction.svg" alt="img" class="img-fluid">
            <h4>Addiction</h4>
           <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a> -->

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/grief.svg" alt="img" class="img-fluid">
            <h4>Grief and Loss</h4>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a> -->

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/trauma.svg" alt="img" class="img-fluid">
            <h4>Trauma</h4>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a> -->

          </div>
        </div>

      

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/anxiety.svg" alt="img" class="img-fluid">
            <h4>Anxiety and Mood Disorders</h4>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a> -->

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/planet.svg" alt="img" class="img-fluid">
            <h4>Life Transitions</h4>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a> -->

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/childissues.svg" alt="img" class="img-fluid">
            <h4>Childhood and Adolescence Issues</h4>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a> -->

          </div>
        </div>

      </div>
    </div>

  </section>



  <!--==========================
    Our Approach and Therapies Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Our Approach</h2>
        <p class="separator">Our approach is client-centric and we are proficient in different kinds of individual and group therapy procedures</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-center">
            <a href="#"><img src="img/approach/playtherapy.jpg" class="img-responsive" alt="img" style = "height:250px;"></a>
            <div class="content-blog">
              <h4><a href="#">Play Therapy</a></h4>
              <!-- <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-center">
            <a href="#"><img src="img/approach/cbt.jpg" class="img-responsive" alt="img" style = "height:250px;"></a>
            <div class="content-blog">
              <h4><a href="#">CBT</a></h4>
              <!--<span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-center">
            <a href="#"><img src="img/approach/emdr.jpg" class="img-responsive" alt="img" style = "height:250px;"></a>
            <div class="content-blog">
              <h4><a href="#">EMDR</a></h4>
              <!--<span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-center">
            <a href="#"><img src="img/approach/schema.jpg" class="img-responsive" alt="img" style = "height:250px;"></a>
            <div class="content-blog">
              <h4><a href="#">Schema Focused</a></h4>
              <!--<span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-center">
            <a href="#"><img src="img/approach/solution.jpg" class="img-responsive" alt="img" style = "height:250px;"></a>
            <div class="content-blog">
              <h4><a href="#">Solution Focused Brief Therapy</a></h4>
              <!--<span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-center">
            <a href="#"><img src="img/approach/clientcentered.jpg" class="img-responsive" alt="img" style = "height:250px;"></a>
            <div class="content-blog">
              <h4><a href="#">Client Centered</a></h4>
              <!--<span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a> -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Contact Us</h2>
        <!-- <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Unit 202, 79 King Street West<br>Cobourg, ON K9A 2M4</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>sanghamitra@healingwithcare.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 647 780 4596</p>
            </div>
          </div>



        </div>

        <div class="col-lg-5 col-md-8">
            <div class="form">
            <?php if(isset($_POST['submit'])){?>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
            <?php } else { ?>
                
                    <form action="" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                <?php }?>
            </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

  <!--==========================
    Footer
  ============================-->
  <footer class="footer">


    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights Healing With Care. All rights reserved.</p>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
