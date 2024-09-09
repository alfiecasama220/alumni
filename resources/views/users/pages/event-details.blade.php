@extends('users.app')

@section('title', 'Event Details')

@section('content')

<!-- Start main-content -->
<div class="main-content-area">

    
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <ul class="list-style-none">
            <li>
              <h5>Topics:</h5>
               {{ $events->title }}
            </li>
            <li>
              <h5>Start Date:</h5>
              {{ str_replace("-", " ", $events->date) }}
            </li>
            <li>
              <h5>Time:</h5>
              {{ $events->time }}
            </li>
            {{-- <li>
              <h5>Share:</h5>
              <div class="styled-icons icon-sm icon-gray icon-circled">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
              </div>
            </li> --}}
          </ul>
        </div>
        <div class="col-md-8">
          <img src="{{ url('/storage/', $events->banner) }}" alt="">
        </div>
      </div>
      <div class="row mt-60">
        <div class="col-md-12">
          <h4 class="mt-0">Event Description</h4>
          <p>{{ $events->description }}</p>
        </div>
        {{-- <div class="col-md-6">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
          </blockquote>
        </div> --}}
      </div>
       
    </div>
  </section>


</div>
  <!-- end main-content -->

@endsection