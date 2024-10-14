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
{{-- Header --}}
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
                      <li class="nav-item ">
                        <a class="nav-link" >Home </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="why"> Why us </a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="display"> Display <span class="sr-only">(current)</span></a>
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

          {{-- Contant --}}

        @foreach($files as $file)
        <div class="">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <strong>Name:</strong>
                        <p>{{ $file->name }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>File:</strong>
                        <p>{{ $file->file_path }}</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <strong>Description:</strong>
                        <p>{{ $file->description }}</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <strong>Uploaded At:</strong>
                        <p>{{ $file->created_at }}</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <a href="{{ asset('uploads/' . $file->file_path) }}" class="btn btn-primary">Download File</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

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


    <!-- Add your scripts here -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Add any other scripts you might need -->
</body>

</html>
