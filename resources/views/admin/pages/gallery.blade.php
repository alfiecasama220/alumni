@extends("admin.pages.app")

@section("title", "Gallery")
@section('content')

<div class="main-panel" >
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Insert new Gallery </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Back</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

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

              <h4 class="card-title">Gallery Form</h4>
              <p class="card-description"> New Picture </p>
              <form class="forms-sample" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-light">File upload</label>
                    <input type="file" name="img" class="file-upload-default">
                    <div class="input-group col-xs-12 d-flex align-items-center">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                      <span class="input-group-append ms-2">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                <div class="form-group">
                  <label class="text-light" for="exampleInputName1">Short Description</label>
                  <input type="text" class="form-control" name="description" id="exampleInputName1" placeholder="Description here">
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="submit" class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Gallery Data</h4>
                {{-- <p class="card-description"> Add class <code>.table-striped</code> --}}
                </p>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> ID </th>
                        <th> Image </th>
                        <th> Description </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>

                      @if($gallery->isNotEmpty())
                        @foreach($gallery as $galleries)
                        <tr>
                          <td>{{ $galleries->id  }}</td>
                          <td class="py-1">
                            <div style="width: 200px; height: 200px">
                              <img class="object-fit-cover" style="width: 100%; height: 100%;" src="{{ url('/storage/' , $galleries->image) }}" alt="image">
                            </div>
                          </td>
                          <td> {{ $galleries->description }} </td>
                          <td>
                              {{-- <a type="button" class="btn btn-primary btn-fw">Edit</a> --}}

                              <form action="{{ route('gallery.destroy', $galleries->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                  <button class="btn btn-danger btn-fw">Delete</button>
                              </form>
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

                  <div>{{ $gallery->links('pagination::bootstrap-5') }}</div>
                  
                </div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </div>

@endsection