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



  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" />
  <title>SHAIKAT</title>
</head>

<body>
  <div class="hero_area">
    <!-- public navigation section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-11 offset-md-1 px-0">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
              <a class="navbar-brand" href="{{ url('/') }}">
                <span>
                  SHAIKAT
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link pl-0" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#skill"> Skill </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/blog') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about"> about </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact me</a>
                    </li>
                    <li class="nav-item">
                      <button class="btn btn-success" style="border-radius: 50px 10px"><a class="nav-link" href="{{ url('/') }}">Resume</a></button>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- end public navigation section -->

    <!-- slider section -->
    <div class="slider_section">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 offset-lg-1">
                  <div class="detail-box">
                    <div class="heading_box">
                      <h2>Abu Shadat<span></span></h2>
                      <h1>
                        Shaikat
                      </h1>
                    </div>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 px-0">
                  <div class="img-box">
                    <img src="{{ asset('images/shaikat.png') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 offset-lg-1">
                  <div class="detail-box">
                    <div class="heading_box">
                      <h2>Abu Shadat<span></span></h2>
                      <h1>
                        Shaikat
                      </h1>
                    </div>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 px-0">
                  <div class="img-box">
                    <img src="{{ asset('images/shaikat.png') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 offset-lg-1">
                  <div class="detail-box">
                    <div class="heading_box">
                      <h2>Abu Shadat</h2>
                      <h1>
                        Shaikat
                      </h1>
                    </div>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 px-0">
                  <div class="img-box">
                    <img src="{{ asset('images/shaikat.png') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- design section -->

  <section class="design_section layout_padding-top" id="about">
    <div class="container">
      <div class="heading_container">
        <h2>
          Full Stack Developer
        </h2>
      </div>
      <div class="design_container layout_padding2">
        <div class="box b-1">
          <h5>
            Frontend
          </h5>
        </div>
        <div class="box b-2">
          <h5>
            API
          </h5>
        </div>
        <div class="box b-3">
          <h5>
            Backend
          </h5>
        </div>
      </div>
    </div>
  </section>

  <!-- end design section   -->
  <div>
    <hr class="section_hr" />
  </div>
  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          About
        </h2>
      </div>
      <div class="box layout_padding2-top layout_padding-bottom">
        <div class="detail-box">
          <p>
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The
            point of using LoremIt is a long established fact that a reader
            will be distracted by the readable content of a page when looking
            at its layout. The point of using Lorem
          </p>
        </div>
        <div class="img-box">
          <img src="images/about-img.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="https://github.com/asm-shaikat" target="_shaikat">
        Get me on Github
      </a>
    </div>
  </section>

  <!-- end about section -->


  <!-- expand section -->

  <section class="expand_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/expand-img.jpg" alt="" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h2>
              Expand your horizons, explore ours. It's all here. It's only
              here.
            </h2>
            <p>
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
              The point of using LoremIt is a long established fact that a
              reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end expand section -->
  <div>
    <hr class="section_hr" />
  </div>
  <!-- Skill section -->
  <div class="skill-section">
    <div class="container">
      <div class="frontend skill-header" id="skill">
        <span>
          <h2>Front End</h2>
        </span>
        @foreach($items as $item)
        <div class="frontend-element">
          <div>
            <p>{{ $item->title }}</p>
          </div>
        </div>
        @endforeach
        <!-- frontend pagination -->
        <div class="d-flex justify-content-center">
          {!! $items->links("pagination::bootstrap-5") !!}
        </div>
      </div>

      <div class="backend skill-header">
        <span>
          <h2>Backend End</h2>
        </span>
        @foreach($items1 as $item1)
        <div class="backend-element">
          <div>
            <p>{{ $item1->title }}</p>
          </div>
        </div>
        @endforeach
        <!-- backend pagination -->
        <div class="d-flex justify-content-center">
          {!! $items1->links("pagination::bootstrap-5") !!}
        </div>
      </div>
      <div class="database skill-header">
        <span>
          <h2>Database</h2>
        </span>
        @foreach($items2 as $item2)
        <div class="database-element">
          <div>
            <p>{{ $item2->title }}</p>
          </div>
        </div>
        @endforeach
        <!-- database pagination -->
        <div class="d-flex justify-content-center">
          {!! $items2->links("pagination::bootstrap-5") !!}
        </div>
      </div>
    </div>
  </div>


  <!-- frontend pagination -->
  <div class="d-flex justify-content-center">
    {!! $items->links("pagination::bootstrap-5") !!}
  </div>

  <!-- end skill section -->

  <!-- contact section -->

  <section class="contact_section layout_padding" id="contact">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Me
        </h2>
      </div>
      <div class="">
        <div class="">
          <div class="row">
            <div class="col-md-9 mx-auto">
              <div class="contact-form">
                <form action="">
                  <div>
                    <input type="text" placeholder="Full Name " />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email Address" />
                  </div>
                  <div>
                    <input type="text" placeholder="Message" class="input_message" />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Send
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding-top layout_padding2-bottom">
    <div class="container">
      <div class="social_container">
        <h2>
          Follow Me
        </h2>
        <div class="social_box">
          <a href="https://www.facebook.com/abushadat.shaikat/" target="_facebook">
            <img src="images/fb.png" alt="" />
          </a>
          <a href="">
            <img src="images/twitter.png" alt="" />
          </a>
          <a href="">
            <img src="images/linkedin.png" alt="" />
          </a>
          <a href="">
            <img src="images/youtube.png" alt="" />
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; 2022 All Rights Reserved By
        <a href="#">Abu Shadat Shaikat</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>