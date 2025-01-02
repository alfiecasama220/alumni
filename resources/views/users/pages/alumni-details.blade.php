@extends('users.app')

@section('title', 'Alumni Details')

@section('content')

<!-- Start main-content -->
<div class="main-content-area">

    
  <section>
    <div class="container">
      <div class="section-content">
        <div class="row col-md-12">
          <div class="col-lg-5 col-md-5">
            <div class="sidebar">
              <div class="widget widget_text text-center">
                <img src="images/team/team-details.jpg" class="img-fullwidth" alt="">
              </div>
              <div class="widget widget_text text-center">
                <div class="textwidget">
                  <div class="section-typo-light bg-theme-colored1 w-100"> <img class="size-full wp-image-800 aligncenter object-fit-cover" src="{{ url('/storage/', $detail->avatar) }}" alt="" style="width: 100%; height:100%">
                  {{-- <h4>Online Help!</h4>
                  <h5>+(123) 456-78-90</h5> --}}
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-9">
            <h3 class="mt-0 mb-10">{{ $detail->firstname . " " . $detail->middlename . " " . $detail->lastname }}</h3>
            <p>Gender: <b>{{ $detail->gender }}</b> </p>
            <p>Batch: <b>{{ $detail->batch }}</b> </p>
            <p>Occupation:<b> {{ $detail->occupation }}</b> </p>
            <p>Course: <b>{{ $detail->course->course }}</b> </p>
            <p>Connected to: <b>{{ $detail->connected_to }}</b> </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>


</div>
  <!-- end main-content -->

@endsection