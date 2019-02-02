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
                    <form id="register-form" method="POST" class="form-horizontal form-simple" action="{{route('do_register')}}" novalidate>
                      @csrf
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input type="text" class="form-control form-control-lg" name="name" id="user-name" placeholder="User Name" value="{{old('name')}}">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        @if($errors->has('name'))
                            <div class="help-block has-error">{{$errors->first('name')}}</div>
                        @endif
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input type="email" class="form-control form-control-lg" name="email" id="user-email" placeholder="Your Email Address"
                        required value="{{old('email')}}">
                        <div class="form-control-position">
                          <i class="ft-mail"></i>
                        </div>
                        @if($errors->has('email'))
                            <div class="help-block has-error">{{$errors->first('email')}}</div>
                        @endif
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" name="password" class="form-control form-control-lg" id="user-password" placeholder="Enter Password"
                        required>
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                        @if($errors->has('password'))
                            <div class="help-block has-error">{{$errors->first('password')}}</div>
                        @endif
                      </fieldset>
                      <button id="register" type="submit" class="btn login-btn btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
                    </form>
                  </div>
                  <p class="text-center">Already have an account ? <a href="{{route('login')}}" class="card-link">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <script>

        $('#regiser').click(function(){
            $('#register').html('Please wait ...');
            // $('#register-form').submit();
        });
    
    </script>
@endsection