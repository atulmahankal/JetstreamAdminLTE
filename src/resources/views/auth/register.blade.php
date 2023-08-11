@extends('layouts.blank')
@section('title', 'Registration')
@section('style')
<link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection

@section('script')
<script>
	$('body').addClass('register-page');
</script>
@endsection


@section('content')
<div class="register-box">
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<a href="/" class="h1">{{ ucfirst(config('app.name', 'Laravel')) }}</a>
		</div>
		<div class="card-body">
			<h5 class="login-box-msg">Register a new membership</h5>

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<b>Whoops! Something went wrong.</b>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<form action="{{ route('register') }}" method="post">
				@csrf
				<div class="input-group mb-3">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
					<input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required>
				</div>
				<div class=" input-group mb-3">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
					<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
					<input type="password" class="form-control" placeholder="Password" name="password" required>
				</div>
				<div class=" input-group mb-3">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
					<input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
				</div>

				<div class="">
					<div class="">
						<div class="icheck-primary">
							<input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
							<label for="agreeTerms">
								I agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>
							</label>
						</div>
					</div>

					<div class="">
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					</div>
				</div>

			</form>
		</div>

		<div class="card-footer text-center">
			<a href="{{ route('login') }}" class="text-center">Already registered?</a>
			</p>
		</div>

	</div>
</div>

@endsection

