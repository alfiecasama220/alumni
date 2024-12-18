{{-- <style>
  .navbar {
    background: #478af5;
  }
</style> --}}

<!-- partial:partials/_navbar.html -->
<nav class="navbar p-0 fixed-top d-flex flex-row" style="background: #0e2f63"> 
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      <a class="navbar-brand brand-logo-mini" href="index.html"><p class="h1">A <span class="h5">M</span></p></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      {{-- <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
          <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
            <input type="text" class="form-control" placeholder="Search products">
          </form>
        </li>
      </ul> --}}
      {{-- <ul class="navbar-nav navbar-nav-right d-flex justify-content-center align-items-center">
        <button id="theme-toggle" class="btn btn-secondary">Switch to Dark Mode</button>
      </ul> --}}
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
            <div class="navbar-profile">
              <img class="img-xs rounded-circle" src="{{ url('/storage/', Auth::user()->avatar) }}" alt="">
              <p class="mb-0 d-none d-sm-block navbar-profile-name text-light">@if(session('name')) {{session('name')}} @endif</p>
              <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <h6 class="p-3 mb-0">Option</h6>
            <div class="dropdown-divider"></div>
            {{-- <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-cog text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Settings</p>
              </div>
            </a> --}}
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{ route('adminLogout') }}">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-logout text-danger"></i>
                </div>
              </div>

              <div class="preview-item-content">
                <p class="preview-subject mb-1">Logout</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">Advanced settings</p>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav>