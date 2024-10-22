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

      <div class="row mt-60">
        <div class="title-separator mb-60">
          <span class="text-uppercase font-26"> Comments</span>
        </div>
        <div class="separator"></div>
    
      
      <div class="col-md-7" >

        @if($eventsComment->isEmpty())
          <h5>No data found</h5>
        @else

        @foreach($eventsComment as $comments)
          <div class="border-4px border-radius-6 mb-md-40 p-15 mt-4" id="comment{{ $comments->id }}">
            <div class="author-thumb d-flex align-items-center">
              <div class="mr-3" style="width: 62px; height:62px; border-radius: 50%">
                <img src="{{ url('/storage/', $comments->user->avatar) }}" class="object-fit-contain" alt="" style="width: 100%; height: 100%; border-radius: 50%">
              </div>
              <div>
                <div>{{ $comments->user->firstname . " " . $comments->user->lastname }} <b>added a new comment @if(auth()->check()) @if(Auth::user()->id == $comments->user_id)  (You) @endif @endif</b></div>
                <div><span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> {{ $comments->created_at }}</span></div>
              </div>
            </div>
            
            <div class="tm-sc-button mt-30">
              <p> {{ $comments->comments }} </p>
            </div>
          </div>
        @endforeach
        @endif

    </div>

    @if(session('username'))
    <div class="col-md-4 mt-4">
      <div class="widget">
        @if (session('success'))
          <h6 class="text-success">{{ session('success') }}</h6>
        @elseif(session('error'))
          <h6 class="text-error">{{ session('error') }}</h6>
        @endif
        
        <div class="d-flex w-100 mb-3">
          <div class="mr-3" style="width: 62px; height:62px; border-radius: 50%">
            <img src="{{ url('/storage/', Auth::user()->avatar) }}" class="object-fit-contain" alt="" style="width: 100%; height: 100%; border-radius: 50%">
          </div>
          <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Comment here</h4>
        </div>
        <form class="quick-contact-form" action="{{ route('comments.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <input type="hidden" name="event_id" value="{{ $events->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <textarea class="form-control" name="comments" placeholder="Enter comment" rows="3" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-theme-colored1 btn-round" data-loading-text="Please wait...">Send Comment</button>
          </div>
        </form>
      </div>
      @else
      <div class="widget">
        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Please <a class="text-primary" href="{{ route('alumniLogin') }}">login</a> to comment</h4>
      </div>
      @endif
      
    </div>
</div>
    
  </section>
  


</div>
  <!-- end main-content -->

@endsection