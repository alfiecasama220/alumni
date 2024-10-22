@extends('users.app')

@section('title', 'Home')

@section('content')

<!-- Start main-content -->
<div class="main-content-area">

    
  <section class="bg-lighter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          {{-- <img class="pull-left flip mr-15 thumbnail" src="http://placehold.it/430x240" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
          <div class="clearfix"></div> --}}
          <h5>{{ $details->title }}</h5>
          <p>{{ $details->description }}</p>
        </div>
      </div>

      <div class="row mt-60">
        <div class="title-separator mb-60">
          <span class="text-uppercase font-26"> Comments</span>
        </div>
        <div class="separator"></div>
    
      
      <div class="col-md-7" >

        @foreach($forumComments as $comments)
          <div class="border-4px border-radius-6 mb-md-40 p-15 mt-4" id="comment{{ $comments->id }}">
            <div class="author-thumb d-flex align-items-center">
              <div class="mr-3" style="width: 62px; height:62px; border-radius: 50%">
                <img src="{{ url('/storage/', $comments->user->avatar) }}" class="object-fit-contain" alt="" style="width: 100%; height: 100%; border-radius: 50%">
              </div>
              <div>
                <div>{{ $comments->user->firstname . " " . $comments->user->lastname }} <b>added a new comment @if(Auth::user()->id == $comments->user_id)  (You) @endif</b></div>
                <div><span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> {{ $comments->created_at }}</span></div>
              </div>
            </div>
            
            <div class="tm-sc-button mt-30">
              <p> {{ $comments->comments }} </p>
            </div>
          </div>
        @endforeach

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
        <form class="quick-contact-form" action="{{ route('forum-comments.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <input type="hidden" name="forum_id" value="{{ $details->id }}">
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