@extends("admin.pages.app")

@section("title", "Alumni List")
@section('content')

<div class="main-panel" >
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Insert new Course </h3>
        <nav aria-label="breadcrumb">
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
                        <th> Profile Picture </th>
                        <th> Name </th>
                        <th> Gender </th>
                        <th> Course Graduated </th>
                        <th> Batch </th>
                        <th> Occupation </th>
                        <th> Status </th>
                        <th> Approval </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>

                      @if($alumni->isNotEmpty())
                        @foreach($alumni as $alumnis)
                        <tr>
                          <td>{{ $alumnis->id }}</td>
                          <td class="py-1">
                            <img src="{{ url('/storage/', $alumnis->avatar) }}" alt="image">
                          </td>
                          <td> {{ $alumnis->lastname. ", " . $alumnis->firstname . " ". $alumnis->middlename }} </td>
                          <td> {{ $alumnis->gender }} </td>
                          <td> {{ $alumnis->course->course }} </td>
                          <td> {{ $alumnis->batch }} </td>
                          <td> Software Engineer </td>
                          <td> @php
                            if($alumnis->status == 1) {
                              echo "Approved";
                            } else if($alumnis->status == 2) {
                              echo "Rejected";
                            } else {{
                              echo "Pending";
                            }}
                          @endphp </td>
                          <td>
                            <div class="form-group">
                              @php
                                $data =  [
                                  ['name' => 'Approve', 'value' => '1', 'status' => 'approve',],
                                  ['name' => 'Reject', 'value' => '2', 'status' => 'approve'],  
                                  ]
                              @endphp
                              <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle bg-bs-themed-1 bg-transparent text-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  Approval Status
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 200;">
                                  @foreach ($data as $datas)
                                  <li>
                                    <form action="{{ route($datas['status'], $alumnis->id) }}" method="POST">
                                      @csrf
                                      @method('PATCH')
                                      <input type="hidden" name="status" value="{{ $datas['value'] }}">
                                      <button class="dropdown-item">{{ $datas['name'] }}</button>
                                    </form>
                                  </li>
                                  @endforeach             
                                </ul>
                              </div>

                              </select>
                            </div>
                          </td>
                          <td>
                              <a type="button" class="btn btn-danger btn-fw">Delete</a>
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

                  <div>{{ $alumni->links('pagination::bootstrap-5') }}</div>
                  
                </div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </div>

@endsection