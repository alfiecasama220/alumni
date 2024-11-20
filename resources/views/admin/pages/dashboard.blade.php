@extends("admin.pages.app")

@section("title", "Dashboard")
@section('content')

<!-- partial -->
<div class="main-panel" style="height: 100vh;">
    <div class="content-wrapper">
      <div class="d-flex justify-content-between">
        <h3 class="page-title"> Dashboard </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Back</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        @foreach($datas as $data)
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0 text-light">{{ $data['value'] }}</h3>
                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">{{ $data['name'] }}</h6>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      

@endsection