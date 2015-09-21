<!-- Logo -->
<a href="{!! route('admin.dashboard') !!}" class="logo">
	<!-- mini logo for sidebar mini 50x50 pixels -->
	<span class="logo-mini">{{{ config('admin.title-mini') }}}</span>
	<!-- logo for regular state and mobile devices -->
	<span class="logo-lg">{{{ config('admin.title') }}}</span>
</a>

<nav class="navbar navbar-static-top" role="navigation">
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					@if(Session::has('adminLocale'))
						<img src="{{asset('packages/sleeping-owl/admin/default/flags/'.Session::get('adminLocale').'.png')}}">
					@else
						<img src="{{asset('packages/sleeping-owl/admin/default/flags/'.App::getLocale().'.png')}}">
					@endif
				</a>
				<ul class="dropdown-menu">
					@foreach(config('admin.availableLocale') as $key => $value)
						<li>
							<a href="{{ route('admin.setlocale', $key) }}">
							<img src="{{asset('packages/sleeping-owl/admin/default/flags/'.$key.'.png')}}">
							{{ $value }}</a>
						</li>
					@endforeach
				</ul>
			</li>
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-user fa-fw"></i>
					{{ \Sentinel::check()->first_name ?: 'admin' }}
				</a>
				<ul class="dropdown-menu">
					<li class="user-footer">
						<div class="pull-right">
							<a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">{{ trans('admin::lang.auth.logout') }}</a>
						</div>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>