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
              <div class="description">Envision being a school of choice in 2030</div>
            </div>
            <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
              <li><a class="social-link" href="#" ><i class="fab fa-facebook"></i></a></li>
              <li><a class="social-link" href="#" ><i class="fab fa-twitter"></i></a></li>
              <li><a class="social-link" href="#" ><i class="fab fa-youtube"></i></a></li>
              <li><a class="social-link" href="#" ><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            {{-- <div class="widget">
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
            </div> --}}
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget widget_nav_menu">
              <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Contact Details</h4>
              {{-- <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Attorneys</a></li>
                <li><a href="#">Practice Arears</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul> --}}
              <ul class="mt-5">
                <li class="m-0 pl-0 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">+440-98-5298</a> </li>
                <li class="m-0 pl-0 pr-10"> <i class="fa fa-envelope text-theme-colored mr-5"></i> <a class="text-gray" href="#">info@mdci.edu.ph</a> </li>
                <li class="m-0 pl-0 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="https://mdci.edu.ph/">www.mdci.edu.ph</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget">
              {{-- <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Opening Hours</h4> --}}
              <div class="opening-hours border-dark">
                <ul class="list-border">
                  <li><a href="{{ route('index') }}">Home</a></li>
                  
                  @if(auth()->check())
                    <li><a href="{{ route('showAlumnis') }}">Alumni's</a></li>
                    <li><a href="shortcode-sitemap.html">Jobs</a></li>
                    <li><a href="{{ route('forums.index') }}">Forums</a></li>
                  @endif
                  <li><a href="{{ route('about') }}">About</a></li>
                </ul>
                {{-- <ul>
                  <li class="clearfix"> <span> Friday - Saturday :  </span>
                    <div class="value pull-right flip"> 10.00 am - 6.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Monday - Thusday :</span>
                    <div class="value pull-right flip"> 8.00 am - 9.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Sunday : </span>
                    <div class="value pull-right flip"> Closed </div>
                  </li>
                </ul> --}}
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
                © {{ date('Y') }} Metro Dumguete College Alumni. All Rights Reserved.
              </div>
            </div>
            <div class="col-sm-6">
              <div class="footer-paragraph text-right">
                {{-- name here --}}
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