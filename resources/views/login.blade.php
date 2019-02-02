@extends('layout.master')
@section('content')

    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header1 border-0">
                  <div class="card-title1 text-center">
                    <div class="p-1">
                      <img src="images/logo-small.png" alt="branding logo">
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body1">
                    <form id="login-form" method="POST" class="form-horizontal form-simple" action="{{route('do_login')}}" novalidate="">
                        @csrf
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control form-control-lg" name="email" id="user-name" placeholder="Your Username" required="" value="{{old('email')}}">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        @if($errors->has('name'))
                            <div class="help-block has-error">{{$errors->first('email')}}</div>
                        @endif
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg" name="password" id="user-password" placeholder="Enter Password" required="">
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                        @if($errors->has('password'))
                            <div class="help-block has-error">{{$errors->first('password')}}</div>
                        @endif
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right"><a href="{{route('forgot_password')}}" class="card-link">Forgot Password?</a></div>
                      </div>
                      <button type="button" id="login" class="btn login-btn btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <p class="float-sm-right text-center m-0">New to Wodjunkie? <a href="{{route('register')}}" class="card-link">Sign Up</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <script>

        $('#login').click(function(){
            $('#login').html('Please wait ...');
            $('#login-form').submit();
        });
    
    </script>
@endsection