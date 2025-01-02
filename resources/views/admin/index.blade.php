@extends("admin.app")

@section("title", "Admin Login")
@section('content')

<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
          <div class="card-body px-5 py-5">
            <h3 class="card-title text-start mb-3">Admin Login</h3>
            <form action="{{ route('adminLogin') }}" method="POST">
                @csrf

                @if (session('success'))
                        <h5 class="text-success">{{ session('success') }}</h5>
                    @elseif(session('error') || $errors->has('email'))
                        <h5 class="text-danger">{{ session('error') ?: $errors->first('email') }}</h5>                        
                    @endif  
              <div class="form-group">
                <label class="text-light">Email *</label>
                <input type="text" name="email" class="form-control p_input">
              </div>
              <div class="form-group">
                <label class="text-light">Password *</label>
                <input type="password" name="password" class="form-control p_input">
              </div>
              {{-- <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
                </div>
                <a href="#" class="forgot-pass">Forgot password</a>
              </div> --}}
              <div class="text-center d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
              </div>
              {{-- <div class="d-flex">
                <button class="btn btn-facebook me-2 col">
                  <i class="mdi mdi-facebook"></i> Facebook </button>
                <button class="btn btn-google col">
                  <i class="mdi mdi-google-plus"></i> Google plus </button>
              </div> --}}
              <p class="sign-up text-light">Don't have an Account?<a href="{{ route('admin.create') }}"> Sign Up</a></p>
            </form>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- row ends -->
  </div>

  {{-- @if (session('success'))
                        <h5 class="text-success">{{ session('success') }}</h5>
                    @elseif(session('error'))
                        <h5 class="text-danger">{{ session('error') }}</h5>                        
                    @endif --}}


@endsection