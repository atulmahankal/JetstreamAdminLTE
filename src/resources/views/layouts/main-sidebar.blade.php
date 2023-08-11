<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">

	<a href="{{ url('/') }}" class="brand-link">
		{{-- <img src="{{ asset('vendor/adminlte/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
		<img class="brand-image img-circle elevation-3" style="opacity: .8" src="{{ Avatar::create(strtoupper(config('app.name', 'Laravel')))->toBase64() }}" alt="logo" class="img-circle elevation-2">
		<span class="brand-text font-weight-light">{{ ucfirst(config('app.name', 'Laravel')) }}</span>
	</a>

	<div class="sidebar">
		<div class="form-inline mt-3">
			<div class="input-group" data-widget="sidebar-search">
                <!-- prevent chrome password manager popup for search -->
                <input name="disable-pwd-mgr-1" type="text" style="display: none;" />
                <input name="disable-pwd-mgr-1" type="password" style="display: none;" />

				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" autocomplete="search" style="appearance: searchfield;">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				{{-- <li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Starter Pages
							<i class="right fas fa-angle-down"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="#" class="nav-link active">
								<i class="far fa-circle nav-icon"></i>
								<p>Active Page</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Inactive Page</p>
							</a>
						</li>
					</ul>
				</li> --}}
				<li class="nav-item">
					<a href="{{ url('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				@if(auth()->user()->isAdmin)
				<li class="nav-item">
					<a href="{{ url('users') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Users
							{{-- <span class="right badge badge-danger">New</span> --}}
						</p>
					</a>
				</li>
				@endif
			</ul>
		</nav>
	</div>


	<!-- Default dropup button -->
	<div class="sidebar-custom dropup">
		<div type="button" class="user-panel pb-3 mb-3 d-flex" data-toggle="dropdown" aria-expanded="false">
			<div class="image">
				{{-- <img src="{{ asset('vendor/adminlte/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image"> --}}
				@if (Auth::user()->profile_photo_url)
					<img class="h-8 w-8 rounded-full object-cover img-circle elevation-2" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
				@else
					<img class="h-8 w-8 rounded-full object-cover img-circle elevation-2" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="{{ Auth::user()->name }}">
				@endif
			</div>
			<div class="info">
				<a href="#" class="d-block text-light text-capitalize">{{ Auth::User()->name }}</a>
			</div>
		</div>
		<div class="dropdown-menu">
			<a href="{{ route('profile.show') }}" class="btn btn-primary dropdown-item">Profile</a>
			<div class="dropdown-divider"></div>

			<form method="POST" action="{{ route('logout') }}" x-data>
				@csrf
				<button type="submit" class="btn dropdown-item">Log Out</button>
			</form>

		</div>
	</div>
</aside>
