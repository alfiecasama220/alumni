@extends('users.app')

@section('title', 'Alumni')

@section('content')

<!-- Start main-content -->
<div class="main-content-area">

    
  <section class="bg-white-f5">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-sm-12">
            <div class="tm-sc-staff staff-style3-modern">
              <!-- Isotope Gallery Grid -->
              <div id="gallery-holder-618422" class="isotope-layout masonry grid-3 gutter-15 clearfix lightgallery-lightbox">
                <div class="isotope-layout-inner" style="position: relative; height: 1132.62px;">
                  <div class="isotope-item isotope-item-sizer" style="position: absolute; left: 0px; top: 0px;"></div>


                  @foreach($alumnis as $alumni)
                  <!-- Isotope Item Start -->
                  <div class="isotope-item" style="position: absolute; left: 0px; top: 0px;">
                    <div class="isotope-item-inner">
                      <div class="tm-staff">
                        <div class="staff-inner">
                          <div class="box-hover-effect">
                            <div class="staff-header effect-wrapper">
                              <div class="thumb"  style="width: 400px; height: 380px">
                                <img src="{{ url('/storage/', $alumni->avatar) }}" class="img-fullwidth object-fit-contain" style="width: 100%; height: 100%;" alt="avatar"/>
                              </div>
                              <div class="overlay-shade shade-white"></div>
                              <div class="icons-holder icons-holder-middle">
                                <div class="icons-holder-inner">
                                  <ul class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                    <li><a class="styled-icons-item" href="{{ route('alumniDetails', $alumni->id) }}"><i class="fa fa-link"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="staff-content">
                              <h5 class="name"><a href="#">{{ $alumni->lastname . ", " . $alumni->firstname . " " . $alumni->middlename }}</a></h5>
                              <div class="speciality">Coure: {{ $alumni->course->course }} </div>
                              <div class="speciality">Batch: {{ $alumni->batch }} </div>
                              <div class="speciality">Working: {{ $alumni->occupation }} </div>
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
                  </div>
                  <!-- Isotope Item End -->
                  @endforeach
                  
                </div>
              </div>
            </div>
            <!-- End Isotope Gallery Grid -->
          </div>
        </div>
      </div>
    </div>
  </section>


</div>
  <!-- end main-content -->

@endsection