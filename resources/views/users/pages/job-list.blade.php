@extends('users.app')

@section('title', 'Job List')

@section('content')

<!-- Start main-content -->
<div class="main-content-area">

  
  <section>
    <div class="w-100 d-flex justify-content-end mt-5">
      <button type="button" class="btn btn-outline-theme-colored1 btn-round btn-sm mr-5" data-toggle="modal" data-target="#exampleModalCenter">Add Jobs  <i class="fa fa-angle-double-right"></i></button>

      <!-- Button trigger modal -->
      {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Vertically centered modal
      </button> --}}

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add Jobs</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="border-1px p-25">
                <h4 class="text-theme-colored1 text-uppercase m-0">Make a forum for user</h4>
                <div class="line-bottom mb-30"></div>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur elit.</p> --}}
                <form id="appointment_form" name="appointment_form" class="mt-30" method="POST" action="{{ route('job.store') }}">
                  @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input name="title" class="form-control" type="text" placeholder="Enter Title" aria-required="true">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-10">
                    <textarea name="description" class="form-control required" placeholder="Enter Description" rows="5" aria-required="true"></textarea>
                  </div>
                  <div class="form-group tm-sc-button mb-0 mt-20">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                  {{-- <button type="submit" class="btn btn-theme-colored1 btn-sm" data-loading-text="Please wait..."> Submit </button> --}}
                  </div>
                
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        
        @if($forums->isNotEmpty())
        <div class="col-md-12">
          @foreach($forums as $forum)
            
              <div class="upcoming-events bg-white-fa mb-20">
                <div class="row">
                  {{-- <div class="col-sm-4 pr-0 pr-sm-15">
                    <div class="thumb p-15">
                      <img class="img-fullwidth" src="https://placehold.it/220x160" alt="...">
                    </div>
                  </div> --}}
                  
                  <div class="col-sm-8 pl-0 pl-sm-15 ml-5">
                    <div class="event-details p-15">
                      <h4 class="media-heading text-uppercase mt-0">{{ $forum->title }}</h4>
                      <small>{{ $forum->created_at }}</small>
                      <p>{{ $forum->description }}</p>
                    </div>
                  </div>
                  <div class="col-sm-2 d-flex align-items-center">
                    <div class="event-count p-15 mt-15">
                      <div class="">
                        <a href="{{ route('job.show', $forum->id) }}" class="btn btn-outline-theme-colored1 btn-round btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                      </div>
                      {{-- <ul class="event-meta mt-10">
                        <li><i class="fa fa-map-marker"></i> 89 Newyork City.</li>
                      </ul> --}}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @else
              <div class="col-md-12 text-center">
                <b>No Jobs added yet</b>
              </div>
          @endif
          
        </div>
      </div>
    </div>
  </section>
  


</div>
  <!-- end main-content -->

@endsection