<!DOCTYPE html>
<html lang="en">  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="icon" href="{{ asset('users/images/icon.png') }}" type="image/x-icon"  >
    <!-- Popperjs -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempus-dominus/5.39.0/css/tempus-dominus.min.css">

    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    {{-- DATE PICKER --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  </head>
  <body>
    <div class="container-scroller">

      @include('admin.pages.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper" style="height: auto">
        @include('admin.pages.navbar')
        
        @yield('content')
           
          {{-- <!-- content-wrapper ends -->
          @include('admin.pages.footer') --}}
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/proBanner.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

    <script>
      // Data Picker Initialization
$('.datepicker').datepicker();
    </script>

    {{-- <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script> --}}

    {{-- <script>
      if (/Mobi/.test(navigator.userAgent)) {
        // if mobile device, use native pickers
        $(".date input").attr("type", "date");
        $(".time input").attr("type", "time");
      } else {
        // if desktop device, use DateTimePicker
        $("#datepicker").datetimepicker({
          useCurrent: false,
          format: "DD-MMM-YYYY",
          showTodayButton: true,
          icons: {
            next: "fa fa-chevron-right",
            previous: "fa fa-chevron-left",
            today: 'todayText',
          }
        });
        $("#timepicker").datetimepicker({
          format: "LT",
          icons: {
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down"
          }
        });
      }
    </script> --}}
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Retrieve the saved theme from localStorage
          var savedTheme = localStorage.getItem('theme') || 'light';
          document.documentElement.setAttribute('data-bs-theme', savedTheme);
          document.getElementById('theme-toggle').textContent = savedTheme === 'light' ? 'Switch to Dark Mode' : 'Switch to Light Mode';
      });

      document.getElementById('theme-toggle').addEventListener('click', function() {
          var htmlElement = document.documentElement;
          var currentTheme = htmlElement.getAttribute('data-bs-theme');
          var newTheme = currentTheme === 'light' ? 'dark' : 'light';
          htmlElement.setAttribute('data-bs-theme', newTheme);
          this.textContent = newTheme === 'light' ? 'Switch to Dark Mode' : 'Switch to Light Mode';

          // Save the new theme to localStorage
          localStorage.setItem('theme', newTheme);
      });
  </script>

  <script>
    let message = document.querySelector('#message');

    setTimeout(() => {
        message.setAttribute('class', 'd-none');
    }, 3000);
    
  </script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bootstrap-datetimepicker/js/demo.js') }}"></script>
  </body>
</html>