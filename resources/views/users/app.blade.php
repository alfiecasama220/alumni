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

<link rel="icon" href="{{ asset('users/images/icon.png') }}" type="image/x-icon"  >

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
<div id="wrapper" class="clearfix">
  
  @include('users.header')

  @yield('content')

  @include('users.footer')

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
