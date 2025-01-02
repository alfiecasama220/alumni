@extends("admin.pages.app")

@section("title", "Add Event")
@section('content')

<div class="main-panel" >
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Insert new Course </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:history.back()">Back</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
          </ol>
        </nav>
      </div>

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create new event post</h4>
            <p class="card-description"> Alumni Events </p>
            @if(session('success'))
                  <div id="message" class="mb-3 bg-success p-4 d-flex align-items-center"><h4 class="text-black">{{ session('success') }}</h4></div>
                  <script>
                    setTimeout();
                </script>
                @elseif(session('error'))
                  <div id="message" class="mb-3 bg-danger p-4 d-flex align-items-center"><h4 class="text-black">{{ session('error') }}</h4></div>
                  <script>
                    setTimeout();
                </script>
                @endif
            <form class="forms-sample" action="{{ route('event.store') }} " method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Event Title</label>
                <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Event Title">
              </div>
              
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="content">
                      <h1>Schedule</h1>

                      <div class="form-group">
                        <label for="id_end_time">Date</label>
                        <div class="input-group date" id="id_4">
                            <input type="text" value="05/16/2018" class="form-control" required/>
                            <div class="input-group-addon input-group-append">
                                <div class="input-group-text">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="id_end_time">Time</label>
                      <div class="input-group date" id="id_2">
                          <input type="text" name="end_time" value="12:31:00 AM" class="form-control" placeholder="End time" title="" required id="id_end_time"/>
                          <div class="input-group-addon input-group-append">
                              <div class="input-group-text">
                                <i class="bi bi-alarm-fill"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                      
                      {{-- <div class="form-group">
                        <label>Date</label>
                        <div class="input-group date" id="datepicker">
                          <input class="form-control" name="date" placeholder="MM/DD/YYYY"/><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-calendar"></i></span></span>
                        </div>
                      </div> --}}
                      {{-- <div class="form-group">
                        <label>Time</label>
                        <div class="input-group time" id="timepicker">
                          <input class="form-control" name="time" placeholder="HH:MM AM/PM"/><span class="input-group-append input-group-addon"><span class="input-group-text"><i class="fa fa-clock"></i></span></span>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="banner" class="file-upload-default">
                <div class="input-group col-xs-12 d-flex align-items-center">
                  <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                  <span class="input-group-append ms-2">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-dark">Cancel</button>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>

@endsection