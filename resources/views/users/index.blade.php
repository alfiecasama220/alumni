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

              @foreach ($events as $event)
                <div class="upcoming-events-current-style mb-10">
                    <div class="row align-items-center">
                    <div class="col-sm-3 pr-0 pr-sm-15">
                        <div class="thumb">
                        <img class="w-100" src="{{ url('/storage/', $event->banner) }}" alt="banner">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="event-details p-15 pt-0 pb-0">
                        <h5 class="media-heading text-uppercase mt-0 mb-0">{{ $event->title }}</h5>
                        <ul class="event-location mb-10">
                            <li class="event-time"><i class="far fa-calendar text-theme-colored2 font-icon sm-display-block"></i> {{ $event->date }}</li>
                            <li class="event-time"><i class="far fa-clock text-theme-colored2 font-icon sm-display-block"></i> {{ $event->time }} </li>
                            {{-- <li class="event-address"><i class="fas fa-map-marker-alt text-theme-colored2 font-icon sm-display-block"></i> Broklyn Street 40, New York</li> --}}
                        </ul>
                        <p class="mb-10"><span class="d-inline-block text-truncate" style="max-width: 650px;">
                          {{ $event->description }}
                        </span></p>
                        <div class="entry-meta mt-0">
                          {{-- <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> Jul 20, 2019</span> --}}
                          <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored"></i> {{ $eventsComment->where('event_id', $event->id)->count() }} Comments</span>
                        </div>
                        <a class="text-theme-colored2" href="{{ route('eventDetails', $event->id) }}">Read More →</a>
                        </div>
                    </div>
                    <div class="col"></div>
                    </div>
                </div>
              @endforeach
              
              
              
              </div>
            </div>
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
          </div>
        </div>
      </div>
    </section>


    @if(auth()->check())
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

                  @foreach($alumni as $alumnis)
            
                  <div class="tm-carousel-item">
                    <div class="tm-staff">
                      <div class="staff-inner">
                        <div class="box-hover-effect">
                          <div class="staff-header effect-wrapper">
                            <div class="thumb"  style="width: 300px; height: 280px">
                              <img src="{{ url('/storage/', $alumnis->avatar) }}" class="img-fullwidth" alt="avatar"/>
                            </div>
                            <div class="overlay-shade shade-white"></div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <ul class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                  <li><a class="styled-icons-item" href="{{ route('alumniDetails', $alumnis->id) }}"><i class="fa fa-link"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="staff-content">
                            <h5 class="name"><a href="#">{{ $alumnis->lastname . ", " . $alumnis->firstname . " " . $alumnis->midlename }}</a></h5>
                            <div class="speciality">Course: {{ $alumnis->course->course }}</div>
                            <div class="speciality">Batch: {{ $alumnis->batch }}</div>
                            <div class="speciality">Working: {{ $alumnis->occupation }} </div>
                            <ul class="contact-info"></ul>
                            {{-- <div class="staff-working-hours">
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
                            </div> --}}
                            {{-- <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                            </ul> --}}
                            <div class="staff-btn">
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
  </div>
  <!-- end main-content -->

@endsection