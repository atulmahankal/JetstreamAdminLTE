@extends('layouts.blank')
@section('title', 'Login')

@section('style')
  <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection

@section('script')
  <script>
    $('body').addClass('login-page');
  </script>
@endsection

@section('content')
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="/" class="h1">{{ ucfirst(config('app.name', 'Laravel')) }}</a>
        </div>
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success">
              <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
              </div>
            </div>
          @endif
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

          <h5 class="login-box-msg">Sign in to start your session</h5>
          <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"
                autocomplete="username" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              <input type="password" class="form-control" placeholder="Password" name="password"
                value="{{ old('password') }}" autocomplete="current-password" required>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>

              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
            </div>
          </form>
        </div>

        <div class="card-footer text-center">
          @if (Route::has('password.request'))
            <p class="mb-1">
              <a href="{{ route('password.request') }}">I forgot my password</a>
            </p>
          @endif
          @if (Route::has('register'))
            <p class="mb-0">
              <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
            </p>
          @endif
        </div>

      </div>

    </div>
  </div>
@endsection
