<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{'assets/img/favicon.png'}}" rel="icon">
  <link href="{{'assets/img/apple-touch-icon.png'}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{'assets/vendor/aos/aos.css'}}" rel="stylesheet">
  <link href="{{'assets/vendor/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
  <link href="{{'assets/vendor/bootstrap-icons/bootstrap-icons.css'}}" rel="stylesheet">
  <link href="{{'assets/vendor/boxicons/css/boxicons.min.css'}}" rel="stylesheet">
  <link href="{{'assets/vendor/glightbox/css/glightbox.min.css'}}" rel="stylesheet">
  <link href="{{'assets/vendor/swiper/swiper-bundle.min.css'}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/bishu1.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ $_SESSION['details']->name ? $_SESSION['details']->name :'' }}</a></h1>
        <div class="social-links mt-3 text-center">
        <a href="https://www.facebook.com/bishwajeet.mehta.39" target=blank class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://github.com/BishwajeetMehta" target=blank class="facebook"><i class="bx bxl-git"></i></a>
          <a href="https://www.instagram.com/mehtabishwajeet99/" target=blank class="instagram"><i class="bx bxl-instagram"></i></a>
          
          <a href="https://www.linkedin.com/in/bishwajeet-mehta-5b035a307/" target=blank class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in" >
      <h1 align=right>{{ $_SESSION['details']->name ? $_SESSION['details']->name :'' }}</h1>
      <p align=center>I'm <span class="typed" data-typed-items="Django Developer,Laravel Developer, Freelancer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>{{ $_SESSION['details']->description ? $_SESSION['details']->description :'' }}</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/me1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{ $_SESSION['details']->profession ? $_SESSION['details']->profession :'' }}</h3>
            
            <div class="row">
              <div class="col-lg-6">
                <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $_SESSION['details']->phone ? $_SESSION['details']->phone :'' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $_SESSION['details']->address ? $_SESSION['details']->address :'' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>Not vailable now</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $_SESSION['details']->status ? $_SESSION['details']->status :'' }}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $_SESSION['details']->age ? $_SESSION['details']->age :'' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $_SESSION['details']->degree ? $_SESSION['details']->degree :'' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{ $_SESSION['details']->email ? $_SESSION['details']->email :'' }}</span></li>
                 
                </ul>
              </div>
            </div>
            <p></br></br>
            {{ $_SESSION['description']->about ? $_SESSION['description']->about :'' }}.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p> {{ $_SESSION['description']->skills ? $_SESSION['description']->skills :'' }}</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">javascript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP Laravel <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Django <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>{{ $_SESSION['description']->myself ? $_SESSION['description']->myself :'' }}</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>{{ $_SESSION['details']->name ? $_SESSION['details']->name :'' }}</h4>
              <p>S{{ $_SESSION['description']->sumary ? $_SESSION['description']->sumary :'' }}</p>
              <ul>
                <li>{{ $_SESSION['details']->address ? $_SESSION['details']->address :'' }}</li>
                <li>{{ $_SESSION['details']->phone ? $_SESSION['details']->phone :'' }}</li>
                <li>{{ $_SESSION['details']->email ? $_SESSION['details']->email :'' }}</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            
           <div class="row skills-content">

           <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Language Skills</h2>
          <p>{{ $_SESSION['description']->language ? $_SESSION['description']->language :'' }}.</p>
        </div>

        <div class="row skills-content">
        @forelse($User as $usr)
          <div class="col-lg-" data-aos="fade-up">
          @forelse($usr->language as $lang)
            <div class="progress">
              <span class="skill">{{$lang->language}} <i class="val">{{$lang->skill}}%</i></span>
              <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$lang->skill}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            @empty
              <hr><h2 style="text-align:center;">Poor Language Skill </h2></hr>
            @endforelse
          </div>
          @empty
         @endforelse

          

         

          

          </div>

        </div>

     
    </section>

        
            
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    

    <!-- ======= Services Section ======= -->
   

    <!-- ======= Testimonials Section ======= -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>{{ $_SESSION['description']->contact ? $_SESSION['description']->contact :'' }}.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $_SESSION['details']->address ? $_SESSION['details']->address :'' }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $_SESSION['details']->email ? $_SESSION['details']->email :'' }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $_SESSION['details']->phone ? $_SESSION['details']->phone :'' }}</p>
              </div>

              
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
       Copyright <strong>{{ $_SESSION['details']->email ? $_SESSION['details']->email :'' }}</strong>
      </div>
     
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{'assets/vendor/purecounter/purecounter_vanilla.js'}}"></script>
  <script src="{{'assets/vendor/aos/aos.js'}}"></script>
  <script src="{{'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
  <script src="{{'assets/vendor/glightbox/js/glightbox.min.js'}}"></script>
  <script src="{{'assets/vendor/isotope-layout/isotope.pkgd.min.js'}}"></script>
  <script src="{{'assets/vendor/swiper/swiper-bundle.min.js'}}"></script>
  <script src="{{'assets/vendor/typed.js/typed.umd.js'}}"></script>
  <script src="{{'assets/vendor/waypoints/noframework.waypoints.js'}}"></script>
  <script src="{{'assets/vendor/php-email-form/validate.js'}}"></script>

  <!-- Template Main JS File -->
  <script src="{{'assets/js/main.js'}}"></script>

</body>

</html>