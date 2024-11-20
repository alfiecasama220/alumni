@extends("admin.pages.app")

@section("title", "Alumni List")
@section('content')

<div class="main-panel" >
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Insert new Course </h3>
        <nav aria-label="breadcrumb">
          {{-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle bg-bs-themed-1 bg-transparent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Filters
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 200;">
              @php
                $data = [
                    ['name' => 'All', 'status' => 'filter', 'value' => '2'],
                    ['name' => 'With Occupation' , 'status' => 'filter', 'value' => '1'] , 
                    ['name' => 'Without Occupation', 'status' => 'filter', 'value' => '0'],
                ];
              @endphp
              @foreach ($data as $datas)
              <li>
                <form action="{{ route($datas['status']) }}" method="POST">
                  @csrf
                  <input type="hidden" name="status" value="{{ $datas['value'] }}">
                  <button class="dropdown-item">{{ $datas['name'] }}</button>
                </form>
              </li>
              @endforeach             
            </ul>
          </div> --}}
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Back</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Gallery Data</h4>
                {{-- <p class="card-description"> Add class <code>.table-striped</code> --}}
                </p>

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
                  <table class="table table-striped mb-4">
                    <thead>
                      <tr>
                        <th> ID </th>
                        <th> Title </th>
                        <th> Description </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>

                      @if($forum->isNotEmpty())
                        @foreach($forum as $forums)
                        <tr>
                          <td>{{ $forums->id }}</td>                        
                          <td> {{ $forums->title }} </td>
                          <td> {{ $forums->description }} </td>
                          <td>
                              <form action="{{ route('forum.destroy', $forums->id) }}" method="POST">
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

                  <div>{{ $forum->links('pagination::bootstrap-5') }}</div>
                  
                </div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </div>

@endsection