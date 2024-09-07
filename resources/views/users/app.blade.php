<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>@yield('title')</title>

<!-- Favicon and Touch Icons -->
<link href="{{ asset('users/images/favicon.png') }}" rel="shortcut icon" type="image/png">
<link href="{{ asset('users/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
<link href="{{ asset('users/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('users/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('users/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('users/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('users/css/animate.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('users/css/javascript-plugins-bundle.css') }}" rel="stylesheet"/>

<!-- CSS | menuzord megamenu skins -->
<link href="{{ asset('users/js/menuzord/css/menuzord.css') }}" rel="stylesheet"/>

<!-- CSS | Main style file -->
<link href="{{ asset('users/css/style-main.css') }}" rel="stylesheet" type="text/css">
<link id="menuzord-menu-skins" href="{{ asset('users/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet"/>

<!-- CSS | Responsive media queries -->
<link href="{{ asset('users/css/responsive.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<!-- CSS | Theme Color -->
<link href="{{ asset('users/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap Datepicker CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

<!-- Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- external javascripts -->
<script src="{{ asset('users/js/jquery.js') }}"></script>
<script src="{{ asset('users/js/popper.min.js') }}"></script>
<script src="{{ asset('users/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('users/js/javascript-plugins-bundle.js') }}"></script>
<script src="{{ asset('users/js/menuzord/js/menuzord.js') }}"></script>



<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{ asset('users/js/revolution-slider/css/rs6.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('users/js/revolution-slider/extra-rev-slider1.css') }}">
<!-- REVOLUTION LAYERS STYLES -->
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('users/js/revolution-slider/js/revolution.tools.min.js') }}"></script>
<script src="{{ asset('users/js/revolution-slider/js/rs6.min.js') }}"></script>
<script src="{{ asset('users/js/revolution-slider/extra-rev-slider1.js') }}"></script>

<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="container-1340px has-side-panel side-panel-right">
<!-- preloader -->
<div id="preloader">
  <div id="spinner">
    <div class="preloader-dot-loading">
      <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
    </div>
  </div>
  <div id="disable-preloader" class="btn btn-default btn-sm bg-white-f5">Disable Preloader</div>
</div>
<div class="side-panel-body-overlay"></div>
<div id="side-panel-container" class="dark" data-tm-bg-img="images/side-push-bg.jpg">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="fa fa-times side-panel-trigger-icon"></i></a></div>
    <img class="logo mb-50" src="images/logo-wide.png" alt="Logo">
    <p>Our motive is to help the poor, helpless and orphan children all over the world.</p>
    <div class="widget">
      <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
      <div class="latest-posts">
        <article class="post media-post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
        <article class="post media-post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
        <article class="post media-post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
      </div>
    </div>

    <div class="widget">
      <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Contact Info</h5>
      <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
        <ul>
          <li class="contact-name">
            <div class="icon"><i class="flaticon-contact-037-address"></i></div>
            <div class="text">John Doe</div>
          </li>
          <li class="contact-phone">
            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
            <div class="text"><a href="tel:+510-455-6735">+510-455-6735</a></div>
          </li>
          <li class="contact-email">
            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
            <div class="text"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></div>
          </li>
          <li class="contact-address">
            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
            <div class="text">3982 Browning Lane Carolyns Circle, California</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="wrapper" class="clearfix">
  
  @include('users.header')

  @yield('content')

  <!-- Footer -->
  <footer id="footer" class="footer layer-overlay overlay-dark-9" data-tm-bg-img="images/bg/bg2.jpg">
    <div class="footer-widget-area">
      <div class="container pt-90 pb-60">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
              <div class="thumb">
                <img alt="Logo" src="{{ asset('users/images/mdc-wide-white.png') }}">
              </div>
              <div class="description">203, Envato Labs, Behind Alis Steet, Melbourne, Australia.immersion along the information close the loop on focusing</div>
            </div>
            <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
              <li><a class="social-link" href="#" ><i class="fab fa-facebook"></i></a></li>
              <li><a class="social-link" href="#" ><i class="fab fa-twitter"></i></a></li>
              <li><a class="social-link" href="#" ><i class="fab fa-youtube"></i></a></li>
              <li><a class="social-link" href="#" ><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget">
              <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
              <div class="latest-posts">
                <article class="post media-post clearfix pb-0 mb-20">
                  <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                    <span class="post-date">
                      <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15, 2020</time>
                    </span>
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-20">
                  <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                    <span class="post-date">
                      <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15, 2020</time>
                    </span>
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-20">
                  <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                    <span class="post-date">
                      <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15, 2020</time>
                    </span>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget widget_nav_menu">
              <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Services</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Attorneys</a></li>
                <li><a href="#">Practice Arears</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget">
              <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Opening Hours</h4>
              <div class="opening-hours border-dark">
                <ul>
                  <li class="clearfix"> <span> Friday - Saturday :  </span>
                    <div class="value pull-right flip"> 10.00 am - 6.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Monday - Thusday :</span>
                    <div class="value pull-right flip"> 8.00 am - 9.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Sunday : </span>
                    <div class="value pull-right flip"> Closed </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
        <div class="container">
          <div class="row pt-20 pb-20">
            <div class="col-sm-6">
              <div class="footer-paragraph">
                © 2020 ThemeMascot. All Rights Reserved.
              </div>
            </div>
            <div class="col-sm-6">
              <div class="footer-paragraph text-right">
                Site Template
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('users/js/custom.js') }}"></script>
<script>

  let inputGroupFile01 = document.getElementById('inputGroupFile01');

  inputGroupFile01.addEventListener("change", function (e) {
    document.getElementById('labelUpload').innerHTML = "Success! Your file is uploaded";
    document.getElementById('labelUpload').setAttribute('class', 'custom-file-label text-success')
  });
</script>
<script>
  $(document).ready(function(){
      $('#yearPicker').datepicker({
          format: "yyyy",     // Display only the year
          viewMode: "years",  // Show only years in the picker
          minViewMode: "years", // Lock the picker to year selection only
          autoclose: true     // Close after selecting the year
      });
  });
</script>

</body>
</html>
