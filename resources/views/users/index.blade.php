@extends('users.app')

@section('title', 'Home')

@section('content')

<!-- Start main-content -->
<div class="main-content-area">

    <!-- Section: About -->
    <section style="background: #206299">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
              {{-- <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">All About</h6> --}}
              <h1 class="text-dark text-uppercase mt-0 ">METRO <br>DUMAGUETE <br>COLLEGE <br> 
                <span class="text-light line-bottom line-bottom-theme-colored1">
                  Alumni's
                  @if (isset(Auth::user()->firstname))
                    {{Auth::user()->firstname}}
                  @endif
                </span> 
              </h1>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 test">
              <div class="box-hover-effect tm-sc-video-popup tm-sc-video-popup-button-over-image">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="w-100" src="{{ asset('users/images/back.jpg') }}" alt="">
                  </div>
                  {{-- <div class="animated-css-play-button"><span class="play-icon"><i class="fa fa-play"></i></span></div>
                  <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=xcJtL7QggTI" title=""></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Upcoming Event -->
    <section class="bg-white-f5">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-12">
              <h2 class="line-bottom line-bottom-theme-colored1">Upcoming <span class="text-theme-colored1">Events</span></h2>

              @for ($i=0; $i<5; $i++)
                <div class="upcoming-events-current-style mb-10">
                    <div class="row align-items-center">
                    <div class="col-sm-3 pr-0 pr-sm-15">
                        <div class="thumb">
                        <img class="w-100" src="{{ asset('users/images/back.jpg') }}" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="event-details p-15 pt-0 pb-0">
                        <h5 class="media-heading text-uppercase mt-0 mb-0">Upcoming Event Title</h5>
                        <ul class="event-location mb-10">
                            <li class="event-time"><i class="far fa-clock text-theme-colored2 font-icon sm-display-block"></i> 04:00 am</li>
                            <li class="event-address"><i class="fas fa-map-marker-alt text-theme-colored2 font-icon sm-display-block"></i> Broklyn Street 40, New York</li>
                        </ul>
                        <p class="mb-10">Dignissim cras tincidunt lorem ipsum is simply free text feugiat at augue. Id purus integer orci.</p>
                        <a class="text-theme-colored2" href="#">Read More →</a>
                        </div>
                    </div>
                    <div class="col"></div>
                    </div>
                </div>
              @endfor
              
              
              
              </div>
            </div>
            {{-- <div class="col-sm-12 col-md-12 col-lg-6">
              <h2 class="line-bottom line-bottom-theme-colored1">Why <span class="text-theme-colored1">Choose Us?</span></h2>
              <p>The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</p>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header bg-theme-colored1" id="headingOne">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      How much does a business plan cost?
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion. Dignissim cras tincidunt lorem ipsum is simply free text feugiat at augue. Id purus integer expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-theme-colored2" id="headingTwo">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Do you provide client references?
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion. Dignissim cras tincidunt lorem ipsum is simply free text feugiat at augue. Id purus integer expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-theme-colored1" id="headingThree">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How much does a business plan cost?
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion. Dignissim cras tincidunt lorem ipsum is simply free text feugiat at augue. Id purus integer expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white">
      <div class="container pb-0 mb-5">
        <div class="section-content">
        <h2>Gallery</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="tm-owl-carousel-3col" data-dots="true" data-nav="true">
              @foreach($gallery as $galleries)
                <div class="item" style="width: 420px;  height: 300px"><img class="object-fit-contain" src="{{ url('/storage/', $galleries->image) }}" alt=""></div>
              @endforeach
              
            </div>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-md-12">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li class="active"><a href="#owl-html" aria-controls="owl-html" role="tab" data-toggle="tab">HTML Code for - 3 Columns</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="owl-html">
                  <pre>
                  <code class="language-markup">
                  &lt;div class=&quot;owl-carousel-3col&quot;&gt;
                    &lt;div class=&quot;item&quot;&gt;&lt;img src=&quot;http://placehold.it/400x200&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;item&quot;&gt;&lt;img src=&quot;http://placehold.it/400x200&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;item&quot;&gt;&lt;img src=&quot;http://placehold.it/400x200&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                  &lt;/div&gt;
                  </code>
                  </pre>
                </div>
              </div>
              <!-- End Tab panels -->
          </div>
        </div> --}}
        </div>
      </div>
    </section>
          
    <section class="bg-white">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h2>About us</h2>
              <p class="h5">Metro Dumaguete College is a non-stock, non-profit, and technology-based institution, duly registered with the Securities and Exchange Commission (SEC), and founded by spouses Mr. Wilfredo Manila and Dr. Delma P. Manila. It started on August 13, 2022, as an internet Cafe. After a few months of operation, they converted into a 4-WD Computer Training Center, registered with TESDA, and offers short training. March 2007, the College applied for permits to operate Four-Year courses under a ladderized curriculum. In 2015, the school was given permit to operate Senior High School programs. Twenty years had passed, this institution is still providing quality education and decent livelihood to their clients and graduates.</p>
              {{-- <div class="row mb-10">
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-ambulance14"></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title"> Emergency Care</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-illness"></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">Operation Theater</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-10">
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-stethoscope10"></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">Outdoor Checkup</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30 ">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-balls"></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">Cancer Service</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30 ">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-drops1"></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">Blood Test</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="mb-sm-50 col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-tablets9"></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title"> Pharmacy</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="col-sm-12 col-md-12 col-lg-5">
              <img src="images/services/sc4.jpg" class="attachment-full mb-10" alt="">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header bg-theme-colored1" id="headingOne">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      How much does a business plan cost?
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-theme-colored2" id="headingTwo">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Do you provide client references?
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-theme-colored1" id="headingThree">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How much does a business plan cost?
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
    <section class="bg-white-f5">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12">
              <div class="tm-sc-staff tm-sc-staff-carousel staff-style3-modern owl-dots-light-skin owl-dots-center">
                <h2>Alumni's</h2>
                <!-- Isotope Gallery Grid -->
                <div id="staff-holder-945632" class="owl-carousel owl-theme tm-owl-carousel-4col" data-nav="true" data-dots="true" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
                  <!-- the loop -->

                  @for ($i=0; $i<12; $i++)
            
                  <div class="tm-carousel-item">
                    <div class="tm-staff">
                      <div class="staff-inner">
                        <div class="box-hover-effect">
                          <div class="staff-header effect-wrapper">
                            <div class="thumb">
                              <img src="{{ asset('users/images/') }}" class="img-fullwidth" alt=""/>
                            </div>
                            <div class="overlay-shade shade-white"></div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <ul class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                  <li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="staff-content">
                            <h5 class="name"><a href="#">Maria Angel</a></h5>
                            <div class="speciality">Dentist</div>
                            <ul class="contact-info"></ul>
                            <div class="staff-working-hours">
                              <ul class="working-hours">
                                <li class="clearfix">
                                  <span>Monday - Friday</span>
                                  <div class="value">8.00 - 17.00</div>
                                </li>
                                <li class="clearfix">
                                  <span>Saturday</span>
                                  <div class="value">9.00 - 16.00</div>
                                </li>
                              </ul>
                            </div>
                            <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                            <div class="staff-btn">
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  @endfor
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->

@endsection