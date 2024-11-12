@extends("admin.app")

@section("title", "Admin Register")
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-light h3">
                    Admin Register
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <h5 class="text-success">{{ session('success') }}</h5>
                    @elseif(session('error') || $errors->has('email'))
                        <h5 class="text-danger">{{ session('error') ?: $errors->first('email') }}</h5>                        
                    @endif
                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name" class="text-light">First name</label>
                                <input type="text" class="form-control" name="firstname" id="name" placeholder="Enter name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name" class="text-light">Middle name</label>
                                <input type="text" class="form-control" name="middlename" id="name" placeholder="Enter name">
                            </div>
                        <div class="form-group col-md-6">
                            <label for="name" class="text-light">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState" class="text-light">Gender</label>
                            <select id="inputState" name="gender" class="form-control">
                                <option selected>Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-light">Profile Picture</label>
                            <input type="file" name="avatar" class="file-upload-default">
                            <div class="input-group col-xs-12 d-flex align-items-center">
                              <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                              <span class="input-group-append ms-2">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                        
                        <div class="form-group">
                            <label for="email" class="text-light">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputState" class="text-light">Role</label>
                            <select id="inputState" name="role" class="form-control">
                                <option selected>Choose...</option>
                                <option value="Admin">Admin</option>
                                <option value="Client">Client</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-light">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                        <div class="w-100 d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-primary dark-mode btn-block w-100">Register</button>
                        </div>
                    </div>
                </form>
                <div class="text-center mt-2 mb-5">
                    <a href="{{ route('login') }}">Login</a>
                </div>
                    {{-- <div class="text-center mt-2">
                        <span class="toggle-mode">Switch to Light Mode</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection