<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"> <p class="h4">Alumni Management</p></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><p class="h1">A <span class="h5">M</span></p></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{ url('/storage/', Auth::user()->avatar) }}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal text-light">{{ Str::ucfirst(Auth::user()->firstname)}}</h5>
              <span class="text-center w">{{  Str::ucfirst(Auth::user()->role) }}</span>
            </div>
          </div>
          {{-- <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-cog text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div> --}}
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('gallery.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-camera-burst"></i>
          </span>
          <span class="menu-title">Gallery</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('course.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Course List</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('alumni.create') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple-plus"></i>
          </span>
          <span class="menu-title">Alumni List</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('jobs.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-weight"></i>
          </span>
          <span class="menu-title">Jobs</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('event.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-google-circles-extended"></i>
          </span>
          <span class="menu-title">Events</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('forum.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-forum"></i>
          </span>
          <span class="menu-title">Forums</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/storage/', Auth::user()->avatar) }}">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" href="docs/documentation.html">
          <span class="menu-icon">
            <i class="mdi mdi-settings-box"></i>
          </span>
          <span class="menu-title">System Settings</span>
        </a>
      </li> --}}
    </ul>
  </nav>