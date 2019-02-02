@extends('layout.master')
@section('content')
		<div class="content-wrapper">
			<div class="content-header row"></div>
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
									<form class="form-horizontal" action="" novalidate>
									  <fieldset class="form-group position-relative has-icon-left">
										<input type="email" class="form-control form-control-lg" id="user-email" placeholder="Your Email Address"
										required>
										<div class="form-control-position">
										  <i class="ft-mail"></i>
										</div>
									  </fieldset>
									  <button type="submit" class="btn login-btn btn-lg btn-block"><i class="ft-unlock"></i> Recover Password</button>
									</form>
								  </div>
								</div>
								<div class="card-footer border-0">
								  <p class="float-sm-left text-center"><a href="{{route('login')}}" class="card-link">Login</a></p>
								  <p class="float-sm-right text-center">New to Swoopos ? <a href="{{route('register')}}" class="card-link">Create Account</a></p>
								</div>
							  </div>
							</div>
					</div>
				</section>
			</div>
		</div>
@endsection