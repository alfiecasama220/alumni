<!-- Header -->
<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
            <ul class="element contact-info">
              <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel: +440-98-5298</li>
              <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i> info@mdci.edu.ph</li>
              {{-- <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> 121 King Street, Melbourne</li> --}}
            </ul>
          </div>
          <div class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">
            <div class="element pt-0 pb-0">
              <ul class="styled-icons clearfix">
                <li><a class="social-link" href="#" ><i class="fab fa-facebook"></i></a></li>
                <li><a class="social-link" href="#" ><i class="fab fa-instagram"></i></a></li>
                {{-- <li><a class="social-link" href="#" ><i class="fab fa-youtube"></i></a></li> --}}
              </ul>
            </div>
            {{-- <div class="element pt-0 pb-0">
              <a href="ajax-load/form-appointment.html" class="btn btn-theme-colored2 btn-sm ajaxload-popup">Make an Appointment</a>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed">
        <div class="menuzord-container header-nav-container">
          <div class="container position-relative">
            <div class="row header-nav-col-row">
              <div class="col-sm-auto align-self-center">
                <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                  <img class="logo-default logo-1x" src="{{ asset('users/images/logoUp.png') }}" alt="Logo">
                  <img class="logo-default logo-2x retina" src="{{ asset('users/images/mdc-wide-small.png') }}" alt="Logo">
                </a>
              </div>
              <div class="col-sm-auto ml-auto pr-0 align-self-center">
                <nav id="top-primary-nav" class="menuzord green" data-effect="slide" data-animation="none" data-align="right">
                  <ul id="main-nav" class="menuzord-menu">
                    <li class="menu-item">
                      <a href="{{ route('index') }}">Home</a>
  
                    </li>

                    @if(session('username'))
                    <li class="menu-item">
                        <a href="{{ route('showAlumnis') }}">Alumni's</a>
    
                      </li>
                    
                    
                    
                      <li class="menu-item"><a href="javascript:void(0)">Event Jobs</a>
                        <ul class="dropdown">
        
                          <li><a href="{{ route('job.index') }}">Jobs</a></li>
                          <li><a href="{{ route('forums.index') }}">Forums</a></li>
                        </ul>
                      </li>
                    @endif

                    <li class="menu-item">
                        <a href="{{ route('about') }}">About</a>
    
                      </li>

                    <li class="menu-item active">
                      @if (session('username'))
                        <a href="{{ route('logout') }}">Logout</a>
                      @else
                        <a href="{{ route('alumniLogin') }}">Login</a>
                      @endif
                    

                    </li>

                    @if (!session('username'))
                    <li class="menu-item active  ml-3">
                      <a href="{{ route('register.index') }}">Signup</a>
  
                      </li>
                    @endif
                    

                    
                    
                  </ul>
                </nav>
              </div>
            
            </div>
            <div class="row d-block d-xl-none">
               <div class="col-12">
                <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                 <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                 </ul>
                </nav>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>