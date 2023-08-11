@extends('layouts.blank')
@section('title', 'forgot password')


@section('script')
<script>
	$('body').addClass('login-page');
</script>
@endsection

@section('content')
<div class="login-box">
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<a href="{{ url('/') }}" class="h1">{{ config('app.name', 'Laravel') }}</a>
		</div>
		<div class="card-body">
			@if (session('status'))
			<p class="login-box-msg text-success">
				{{ session('status') }}
			</p>
			@endif

			@if (session('errors'))
			<ul type="none" class="login-box-msg text-danger">
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif

			<p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

			<form action="{{ route('password.email') }}" method="post">
				@csrf
				<div class="input-group mb-3">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
					<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
				</div>
				<div class="row">
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block">Request new password</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<p class="mt-3 mb-1">
				<a href="{{ route('login') }}">Login</a>
			</p>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->
@endsection