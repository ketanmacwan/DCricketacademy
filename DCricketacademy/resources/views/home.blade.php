<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>JOY'S Demo Site</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="home">
            <span>
              Joy
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" >Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="why"> Why us </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="display"> Display </a>
                  </li>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trainer"> trainers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact"> Contact Us</a>
                </li>
              </ul>

              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
            
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                        Training
                    </h2>
                    <h1>
                        Desire Cricket Academy
                    </h1>
                    <p>
                        "Experience the thrill of cricket like never before. Join us for an unforgettable season of excitement and passion!"
                    </p>
                    <div class="">
                      <a href="contact">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                        Fitness
                      </h3>
                      <h2>
                          Training
                      </h2>
                      <h1>
                          Desire Cricket Academy
                      </h1>
                      <p>
                          "Experience the thrill of cricket like never before. Join us for an unforgettable season of excitement and passion!"
                      </p>
                      <div class="">
                        <a href="contact">
                          Contact Us
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                        Fitness
                      </h3>
                      <h2>
                          Training
                      </h2>
                      <h1>
                          Desire Cricket Academy
                      </h1>
                      <p>
                          "Experience the thrill of cricket like never before. Join us for an unforgettable season of excitement and passion!"
                      </p>
                      <div class="">
                        <a href="contact">
                          Contact Us
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                        Fitness
                      </h3>
                      <h2>
                          Training
                      </h2>
                      <h1>
                          Desire Cricket Academy
                      </h1>
                      <p>
                          "Experience the thrill of cricket like never before. Join us for an unforgettable season of excitement and passion!"
                      </p>
                      <div class="">
                        <a href="contact">
                          Contact Us
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                        Fitness
                      </h3>
                      <h2>
                          Training
                      </h2>
                      <h1>
                          Desire Cricket Academy
                      </h1>
                      <p>
                          "Experience the thrill of cricket like never before. Join us for an unforgettable season of excitement and passion!"
                      </p>
                      <div class="">
                        <a href="contact">
                          Contact Us
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  QUALITY EQUIPMENT
                </h5>
                <p>
                    "Quality equipment can significantly enhance a cricket player's performance and reduce the risk of injury."
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  NUTRITION
                </h5>
                <p>
                    "Proper nutrition is the foundation for any successful cricket training program."
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  HEALTHY DIET PLAN
                </h5>
                <p>
                    "A balanced and nutritious diet is crucial for cricket players to fuel their performance and aid in recovery."
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  SPORT TRAINING
                </h5>
                <p>
                    "Consistent training is the key to unlocking your full potential in sports."
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end us section -->


  <!-- heathy section -->

  <section class="heathy_section layout_padding">
    <div class="container">

      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="detail-box">
            <h2>
                “Attitude is everything”
            </h2>
            <p>
                "In cricket, attitude is everything. It's not just about skill and technique, but also about mental toughness and resilience. A positive attitude can help a player overcome setbacks and challenges, while a negative attitude can drag them down. Great cricket players are those who approach every game with determination, focus, and a never-say-die spirit. So, whether you're a seasoned pro or just starting out, remember that your attitude can make all the difference on the field."
            </p>
            <div class="btn-box">
              <a href="">
                READ MORE
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end heathy section -->

  <!-- trainer section -->

  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Trainers
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Joy Macwan
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t1.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="">
                <img src="images/facebook-logo.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/instagram-logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Hardik Parmar
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t2.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="">
                <img src="images/facebook-logo.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/instagram-logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Ravindra Zala
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t3.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="">
                <img src="images/facebook-logo.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/instagram-logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end trainer section -->

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Location
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +91 9723098678
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                ketanmacwan02@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
        Created By JOY MACWAN...!
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>
