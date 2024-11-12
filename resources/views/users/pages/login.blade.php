@extends('users.app')

@section('title', 'Login')

@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mb-40">
        <h4 class="text-gray mt-0 pt-10"> Login</h4>
        <hr>
        <p>Please login to the system</p>
        <form action="{{ route('loginPost') }}" method="POST" name="login-form" class="clearfix">
          @csrf

            @if (session('success'))
                <h5 class="text-success">{{ session('success') }}</h5>
            @elseif(session('error') || $errors->has('email'))
                <h5 class="text-danger">{{ session('error') ?: $errors->first('email') }}</h5>                        
            @endif
          <div class="row">
            <div class="form-group col-md-12">
              <label for="form_username_email">Username/Email</label>
              <input id="form_username_email" name="email" class="form-control" type="text">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="form_password">Password</label>
              <input type="password" id="form_password" name="password" class="form-control" type="text">
            </div>
          </div>
          <div class="checkbox pull-left mt-15">
            <label for="form_checkbox">
              <input id="form_checkbox" name="form_checkbox" type="checkbox">
              Remember me </label>
          </div>
          <div class="form-group tm-sc-button pull-right mt-10">
            <button type="submit" class="btn btn-dark btn-xs">Login</button>
          </div>
          {{-- <div class="clear text-center pt-15">
            <a class="text-theme-colored1 font-weight-600 font-size-12" href="#">Forgot Your Password?</a>
          </div>
          <div class="clear tm-sc-button pt-10">
            <a href="#" target="_self" class="btn btn-theme-colored1 btn-block" data-tm-bg-color="#3b5998" style="background-color: rgb(59, 89, 152) !important;"> Login with facebook </a>
            <a href="#" target="_self" class="btn btn-theme-colored1 btn-block" data-tm-bg-color="#00acee" style="background-color: rgb(0, 172, 238) !important;"> Login with twitter </a>
          </div> --}}
        </form>
      </div>
    </div>
  </div>
</section>

@endsection