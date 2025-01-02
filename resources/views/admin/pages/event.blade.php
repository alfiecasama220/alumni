@extends("admin.pages.app")

@section("title", "Course List")
@section('content')

<div class="main-panel" >
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Insert new Events </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Back</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
          </ol>
        </nav>
      </div>
      
      <div class="w-100 d-flex justify-content-end mb-4">
        <a type="button" href="{{ route('event.create') }}" class="btn btn-primary btn-icon-text">
          <i class="mdi mdi-plus btn-icon-prepend"></i> Upload </a>
      </div>

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Events</h4>
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
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Banner </th>
                    <th> Title </th>
                    <th> Date </th>
                    <th> Time </th>
                    <th> Description </th>
                    
                  </tr>
                </thead>
                <tbody>

                  @if($events->isNotEmpty())
                    @foreach ($events as $event)
                    <tr>
                      <td class="py-1">
                        <img src="{{ url('/storage/', $event->banner) }}" alt="image">
                      </td>
                      <td> {{ $event->title }} </td>
                      <td>
                        {{ $event->date }}
                      </td>
                      <td> {{ $event->time }} </td>
                      <td>
                        <span class="d-inline-block text-truncate" style="max-width: 190px;">
                          {{ $event->description }}
                        </span>
                       
                      </td>
                    </tr>
                    @endforeach
                  @else
                      @php
                        $noData = "No data is added yet"
                      @endphp
                  @endif

                </tbody>
              </table>
              @if(isset($noData))
                    <div class="w-100 mt-4 p-5"><h4 class="text-center">{{ $noData }}</h4></div>
                  @endif
            </div>
          </div>
        </div>
      </div>

      


    </div>
  </div>

@endsection