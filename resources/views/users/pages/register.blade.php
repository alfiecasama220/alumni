@extends('users.app')

@section('title', 'Register')

@section('content')

<section>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form action="{{ route('register.store') }}" class="register-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="icon-box mb-0 p-0">
              <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mt-10 mb-0 mr-10">
                <i class="pe-7s-users"></i>
              </a>
              <h4 class="text-gray pt-10 mt-0 mb-30">Alumni Registration</h4>
            </div>
            <hr>
            <p class="text-gray">Don't have an Account? Register Now.</p>
            @if (session('success'))
                <h5 class="text-success">{{ session('success') }}</h5>
            @elseif(session('error') || $errors->has('email'))
                <h5 class="text-danger">{{ session('error') ?: $errors->first('email') }}</h5>                        
            @endif
            <div class="row">
              <div class="form-group col-md-12">
                <label>First name</label>
                <input name="firstname" class="form-control" type="text">
              </div>
              <div class="form-group col-md-6">
                <label>Middle name</label>
                <input name="middlename" class="form-control" type="text" placeholder="Leave it blank if not applicable">
              </div>
              <div class="form-group col-md-6">
                <label>Last name</label>
                <input name="lastname" class="form-control" type="text">
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Gender</label>
                <select id="inputState" name="gender" class="form-control">
                  <option selected>Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="yearPicker">Batch Year</label>
                <input type="text" name="batch" class="form-control" id="yearPicker" placeholder="YYYY">
              </div>

              <div class="form-group col-md-12">
                <label>Occupation</label>
                <input name="occupation" class="form-control" type="text">
              </div>

              <div class="form-group col-md-12">
                <label for="inputState">Course</label>
                <select id="inputState" name="course" class="form-control">
                  <option selected>Choose...</option>
                  @foreach ($course as $courses )
                    <option value="{{ $courses->id }}">{{ $courses->course }}</option>
                  @endforeach
                  
                </select>
              </div>

              <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea1">Currently Connected To</label>
                <textarea class="form-control" name="currently" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea1">Upload Profile Picture</label>
              </div>
              <div class="input-group mb-3 form-group col-md-12">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="avatar" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01" id="labelUpload">Choose file</label>
                </div>
              </div>

              <div class="form-group col-md-12">
                <label>Email Address</label>
                <input name="email" class="form-control" type="email">
              </div>
            </div>
            {{-- <div class="row">
              <div class="form-group col-md-12">
                <label for="form_choose_username">Choose Username</label>
                <input id="form_choose_username" name="form_choose_username" class="form-control" type="text">
              </div>
            </div> --}}
            <div class="row">
              <div class="form-group col-md-12">
                <label for="form_choose_password">Choose Password</label>
                <input type="password" id="form_choose_password" name="password" class="form-control" type="text">
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="dataCheck">
              <label class="form-check-label" for="exampleCheck1">By checking this, you agree to our Data Privacy Policy.</label>
            </div>
            <div class="form-group tm-sc-button">
              <button id="subButton" class="btn btn-dark btn-block mt-15" type="submit" disabled>Register Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script>
    let dataCheck = document.getElementById('dataCheck');
    let subButton = document.getElementById('subButton');

    dataCheck.addEventListener('click', function () {
      if(dataCheck.checked) {
        subButton.disabled = false;
      } else {
        subButton.disabled = true;
      }
    });
  </script>

@endsection