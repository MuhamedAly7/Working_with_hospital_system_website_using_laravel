@extends('dashboard.layouts.master2')
@section('css')
<style>
	.loginform{
		display: none;
	}
</style>
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('dashboard/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<!-- Page -->
		<div class="page">
			<div class="container-fluid">
				<div class="row no-gutter">
					<!-- The image half -->
					<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
						<div class="row wd-100p mx-auto text-center">
							<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
								<img src="{{URL::asset('dashboard/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
							</div>
						</div>
					</div>
					<!-- The content half -->
					<div class="col-md-6 col-lg-6 col-xl-5">
						<div class="login d-flex align-items-center py-2">
							<!-- Demo content-->
							<div class="container p-0">
								<div class="row">
									<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="card-sigin">
											<div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('dashboard/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>
											<div class="card-sigin">
												<div class="main-signup-header">
													<h2>{{ trans('dashboard/login_trans.Welcome_back') }}!</h2>
													@if ($errors->any())
													    <div class="alert alert-danger">
													        <ul>
													            @foreach ($errors->all() as $error)
													                <li>{{ $error }}</li>
													            @endforeach
													        </ul>
													    </div>
													@endif
													<div class="form-group">
														<label for="exampleFormControlSelect1">{{ trans('dashboard/login_trans.select_from_menu') }}</label>
														<select class="form-control" id="sectionChooser">
															<option value="" selected disabled>{{ trans('dashboard/login_trans.sign_in_as') }}</option>
															<option value="user">{{ trans('dashboard/login_trans.patient') }}</option>
															<option value="admin">{{ trans('dashboard/login_trans.admin') }}</option>
														</select>
													</div>

													{{-- User Form --}}
													<div class="loginform" id="user">
														<h5 class="font-weight-semibold mb-4">{{ trans('dashboard/login_trans.sign_in_as_patient') }}.</h5>
														<form method="POST" action="{{ route('login.user') }}">
															@csrf
															<div class="form-group">
																<label>{{ trans('dashboard/login_trans.email') }}</label> <input class="form-control" placeholder="{{ trans('dashboard/login_trans.enter_email') }}" type="email" name="email" :value="old('email')" required autofocus>
															</div>
															<div class="form-group">
																<label>{{ trans('dashboard/login_trans.password') }}</label> <input class="form-control" placeholder="{{ trans('dashboard/login_trans.enter_password') }}" type="password" name="password" required autocomplete="current-password">
															</div><button type="submit" class="btn btn-main-primary btn-block">{{ trans('dashboard/login_trans.sign_in') }}</button>
															<div class="row row-xs">
																<div class="col-sm-6">
																	<button class="btn btn-block"><i class="fab fa-facebook-f"></i> {{ trans('dashboard/login_trans.sign_up_facebook') }}</button>
																</div>
																<div class="col-sm-6 mg-t-10 mg-sm-t-0">
																	<button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> {{ trans('dashboard/login_trans.sign_up_twitter') }}</button>
																</div>
															</div>
														</form>
														<div class="main-signin-footer mt-5">
															<p><a href="">{{ trans('dashboard/login_trans.forgot_password') }}</a></p>
															<p>{{ trans('dashboard/login_trans.dont_have_account') }} <a href="{{ url('/' . $page='signup') }}">{{ trans('dashboard/login_trans.create_account') }}</a></p>
														</div>
													</div>
													
													{{-- Admin Form --}}
													<div class="loginform" id="admin">
														<h5 class="font-weight-semibold mb-4">{{ trans('dashboard/login_trans.sign_in_as_admin') }}.</h5>
														<form method="POST" action="{{ route('login.admin') }}">
															@csrf
															<div class="form-group">
																<label>{{ trans('dashboard/login_trans.email') }}</label> <input class="form-control" placeholder="{{ trans('dashboard/login_trans.enter_email') }}" type="email" name="email" :value="old('email')" required autofocus>
															</div>
															<div class="form-group">
																<label>{{ trans('dashboard/login_trans.password') }}</label> <input class="form-control" placeholder="{{ trans('dashboard/login_trans.enter_password') }}" type="password" name="password" required autocomplete="current-password">
															</div><button type="submit" class="btn btn-main-primary btn-block">{{ trans('dashboard/login_trans.sign_in') }}</button>
															<div class="row row-xs">
																<div class="col-sm-6">
																	<button class="btn btn-block"><i class="fab fa-facebook-f"></i> {{ trans('dashboard/login_trans.sign_up_facebook') }}</button>
																</div>
																<div class="col-sm-6 mg-t-10 mg-sm-t-0">
																	<button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> {{ trans('dashboard/login_trans.sign_up_twitter') }}</button>
																</div>
															</div>
														</form>
														<div class="main-signin-footer mt-5">
															<p><a href="">{{ trans('dashboard/login_trans.forgot_password') }}</a></p>
															<p>{{ trans('dashboard/login_trans.dont_have_account') }} <a href="{{ url('/' . $page='signup') }}">{{ trans('dashboard/login_trans.create_account') }}</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End -->
						</div>
					</div><!-- End -->
				</div>
			</div>
		</div>
		<!-- End Page -->
@endsection
@section('js')
<script>
	$('#sectionChooser').change(function(){
		var myID = $(this).val();
		$('.loginform').each(function(){
			myID === $(this).attr('id') ? $(this).show() : $(this).hide();
		});
	});
</script>
@endsection