<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/navbars/navbar-1/assets/css/navbar-1.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!-- Navbar 1 - Bootstrap Brain Component -->
<nav class="navbar navbar-expand-md bg-light bsb-navbar bsb-navbar-hover bsb-navbar-caret">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="./assets/img/bsb-logo.svg" alt="BootstrapBrain Logo" width="135" height="44">
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#!">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">
              <li><a class="dropdown-item" href="#!">Log in</a></li>
              <li><a class="dropdown-item" href="#!">Lost Password?</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#!">Sign up</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="#!">Writing</a></li>
              <li><a class="dropdown-item" href="#!">SEO</a></li>
              <li><a class="dropdown-item" href="#!">Web Design</a></li>
              <li><a class="dropdown-item" href="#!">App Development</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>





<section class="home-banner d-flex text-center align-items mt-80">
  <div class="container" data-aos="fade-up">
    <h1 class="cinzel fs72 fw400 text-white line-height">Enhance Your Student Experience <span class="text-clr fw500">Through AI</span></h1>
  </div>
</section>



<section class="home-about mt100">
    <div class="container">
        <div class="row  align-items">
            <div class="col-md-5" data-aos="fade-right">
                <img src="images/homeabout.png" class="img-responsive" />
            </div>
         
             <div class="col-md-7" data-aos="fade-left">
                <div class="ml">
                <h3 class="fs52 cinzel fw400 mb20">Utilize <span class="text-clr fw500">AI-POWERED </span> automation to craft tailored customer experiences</h3>
                <p class="fs24 fw300">Having extensive operational experience in contact centers, and incorporating AI into the fundamental framework of our products and solutions, we are poised 
                    to assist you in providing students with consistent, streamlined, and tailored experiences. </p>
               </div>
             </div>
          

        </div>
    </div>
</section>


<section class="digital-divide mt100 bg-black ptb80">
    <div class="container">
    <h3 class="fs52 cinzel fw400 mb20 text-white text-center" data-aos="fade-up">Bridging the <span class="text-clr fw500">Digital Divide </span></h3>
        <div class="row  align-items">
            <div class="col-md-4" data-aos="fade-up">
              
            <div class="box">
              <img src="images/dummyicon.png">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Unifying diverse IT landscapes</p>
                <p class="fs20 fw300">We cater to institutions of all sizes, seamlessly integrating with your existing infrastructure, regardless of complexity.</p>
              </div>
            </div>

            </div>
         
            <div class="col-md-4" data-aos="fade-up">
           <div class="box">
              <img src="images/dummyicon.png">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Democratizing access to technology</p>
                <p class="fs20 fw300">Providing affordable and accessible solutions that bridge the digital divide for students and staff.</p>
              </div>
            </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
           <div class="box">
              <img src="images/dummyicon.png">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Building a connected community</p>
                <p class="fs20 fw300">Fostering a sense of community within your institution through collaborative learning platforms and communication tools.</p>
              </div>
            </div>
            </div>
             

        </div>
    </div>
</section>



<section class="digital-divide mt100">
    <div class="container">
    <h3 class="fs52 cinzel fw400 mb20 text-center" data-aos="fade-up">Bridging <span class="text-clr fw500"> Knowledge Gaps </span></h3>
        <div class="row  align-items">
            <div class="col-md-6" data-aos="fade-right">
              <div class="box">
              <img src="images/dummyicon.png">
              <div class="digital-content">
                <p class="digital-content-heading fs30">Empowering educators</p>
                <p class="fs20 fw300">Equipping faculty with tools to enhance teaching, facilitate <br />collaboration, and personalize learning experiences.</p>
              </div>
            </div>
            </div>
         
         <div class="col-md-6" data-aos="fade-left">
           <div class="box">
              <img src="images/dummyicon.png">
              <div class="digital-content">
                <p class="digital-content-heading fs30">Enabling student success</p>
                <p class="fs20 fw300">Providing students with 24/7 access to resources, support, and personalized feedback, paving their path to academic achievement.</p>
              </div>
            </div>
            </div>
             

        </div>
    </div>
</section>

<section class="digital-divide mt100 bg-black ptb80">
    <div class="container">
    <h3 class="fs52 cinzel fw400 mb20 text-white text-center" data-aos="fade-up">Bridging the <span class="text-clr fw500">Communication Gap </span></h3>
        <div class="row  align-items">
            <div class="col-md-4" data-aos="fade-up">
              
            <div class="box">
              <img src="images/dummyicon.png">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Streamlining communication</p>
                <p class="fs20 fw300">Simplifying administrative tasks and enhancing communication between students, faculty, and staff through integrated solutions.</p>
              </div>
            </div>

            </div>
         
            <div class="col-md-4" data-aos="fade-up">
           <div class="box">
              <img src="images/dummyicon.png">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Providing real-time data insights</p>
                <p class="fs20 fw300">Empowering administrators with actionable data to make informed decisions and optimize institutional operations.</p>
              </div>
            </div>
            </div>

            <div class="col-md-4" data-aos="fade-up">
           <div class="box">
              <img src="images/dummyicon.png">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Building a connected community</p>
                <p class="fs20 fw300">Fostering a sense of community within your institution through collaborative learning platforms and communication tools.</p>
              </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="digital-divide mt100">
    <div class="container">
    <h3 class="fs52 cinzel fw400 mb40 text-center" data-aos="fade-up">Client <span class="text-clr fw500"> Testimonials </span></h3>
     <div class="swiper mySwiper" data-aos="fade-up">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="testimonial-box">
                <img src="images/client1.png">
                  <p class="bg">Lorem ipsum dolor sit amet consectetur. In vestibulum diam felis ut eu fringilla fusce. Enim vitae ornare gravida 
                    facilisis mollis. Sagittis amet nunc id consectetur commodo tempus velit nunc viverra. </p>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="testimonial-box">
                <img src="images/client2.png">
                  <p class="bg">Lorem ipsum dolor sit amet consectetur. In vestibulum diam felis ut eu fringilla fusce. Enim vitae ornare gravida 
                    facilisis mollis. Sagittis amet nunc id consectetur commodo tempus velit nunc viverra. </p>
            </div>
        </div>
        <div class="swiper-slide">
        <div class="testimonial-box">
                <img src="images/client1.png">
                  <p class="bg">Lorem ipsum dolor sit amet consectetur. In vestibulum diam felis ut eu fringilla fusce. Enim vitae ornare gravida 
                    facilisis mollis. Sagittis amet nunc id consectetur commodo tempus velit nunc viverra. </p>
            </div>
        </div>
        <div class="swiper-slide">
        <div class="testimonial-box">
                <img src="images/client1.png">
                  <p class="bg">Lorem ipsum dolor sit amet consectetur. In vestibulum diam felis ut eu fringilla fusce. Enim vitae ornare gravida 
                    facilisis mollis. Sagittis amet nunc id consectetur commodo tempus velit nunc viverra. </p>
            </div>
        </div>
      
     </div>
     <div class="swiper-pagination"></div>
    </div>

    
    </div>
</section>




<section class="digital-divide mt100 bg-black ptb80">
    <div class="container">
    <h3 class="fs52 cinzel fw400 mb20 text-white text-center" data-aos="fade-up">Blogs</h3>
        <div class="row  align-items">
            <div class="col-md-4" data-aos="fade-up">
              
            <div class="box">
              <img src="images/blog1.png" class="img-responsive">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Lorem ipsum dolor sit amet</p>
                <p class="fs20 fw300">Lorem ipsum dolor sit amet consectetur. In vestibulum diam felis ut eu fringilla fusce. </p>
              </div>
            </div>

            </div>
         
            <div class="col-md-4" data-aos="fade-up">
           <div class="box">
              <img src="images/blog2.png" class="img-responsive">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Lorem ipsum dolor sit amet</p>
                <p class="fs20 fw300">Lorem ipsum dolor sit amet consectetur. In vestibulum diam felis ut eu fringilla fusce. </p>
              </div>
            </div>
            </div>

             <div class="col-md-4" data-aos="fade-up">
              <div class="box">
              <img src="images/blog3.png" class="img-responsive">
              <div class="digital-content text-white">
                <p class="digital-content-heading fs30">Lorem ipsum dolor sit amet</p>
                <p class="fs20 fw300">Lorem ipsum dolor sit amet consectetur. In vestibulum diam felis ut eu fringilla fusce. </p>
              </div>
            </div>
            </div>

            <a href="" class="headerbutton text-center cta" data-aos="fade-up">VIEW ALL</a>
        </div>
    </div>
</section>

<script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>