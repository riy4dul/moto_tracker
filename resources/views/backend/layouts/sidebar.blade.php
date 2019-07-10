 BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
	<div class="brand-sidebar">
		<h1 class="logo-wrapper">
		<a class="brand-logo darken-1" href="{{route('home')}}">
			<img src="{{asset('')}}backend/app-assets/images/logo/materialize-logo.png" alt="materialize logo"/>
			<span class="logo-text hide-on-med-and-down">Moto Tracker</span>
		</a>
		<a class="navbar-toggler" href="#">
			<i class="material-icons">radio_button_checked</i>
		</a>
		</h1>
	</div>
	<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
		{{-- <li class="bold">
			<a class="waves-effect waves-cyan {{ Request::is('home') ? 'active' : ''}}" href="{{route('home')}}">
				<i class="material-icons">dvr</i>
				<span class="menu-title" data-i18n="">Dashboard</span>
			</a>
		</li> --}}


		<li class="bold {{ Request::is('home*') ? 'active' : ''}}">
			<a class="collapsible-header waves-effect waves-cyan " href="#" tabindex="0">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">Home Page</span>
				{{-- <span class="badge badge pill orange float-right mr-10">3</span> --}}
			</a>
          <div class="collapsible-body" style="display: block;">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active">
              	<a class="collapsible-body  {{ Request::is('home-slider') ? 'active' : ''}}" href="{{route('homeSlider')}}" data-i18n="" style="display: block;">
              		<i class="material-icons">radio_button_unchecked</i>
              		<span>Slider</span></a>
              </li>
              <li>
              	<a class="collapsible-body  {{ Request::is('home-services') ? 'active' : ''}}" href="{{route('homeServices')}}" data-i18n="">
              		<i class="material-icons">radio_button_unchecked</i>
              		<span>Services</span></a>
              </li>
              <li><a class="collapsible-body {{ Request::is('home-clients') ? 'active' : ''}} " href="{{route('homeOurClients')}}" data-i18n="">
              	<i class="material-icons">radio_button_unchecked</i>
              	<span>Our Clients</span>
              </a>
              </li>
            </ul>
          </div>
        </li>


		{{-- <li class="bold">
			<a class="waves-effect waves-cyan {{ Request::is('home-page') ? 'active' : ''}}" href="{{route('homePage')}}">
				<i class="material-icons">chat_bubble_outline</i>
				<span class="menu-title" data-i18n="">Home Page</span>
			</a>
		</li> --}}

		<li class="bold">
			<a class="waves-effect waves-cyan {{ Request::is('about-us') ? 'active' : ''}}" href="{{route('aboutUs')}}">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">About Us Page</span>
			</a>
		</li>
		<li class="bold">
			<a class="waves-effect waves-cyan " href="#">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">Products Page</span>
			</a>
		</li>
		<li class="bold">
			<a class="waves-effect waves-cyan " href="#">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">Price & Package Page</span>
			</a>
		</li>
		<li class="bold">
			<a class="waves-effect waves-cyan " href="#">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">Contact Page</span>
			</a>
		</li>
		<li class="bold">
			<a class="waves-effect waves-cyan " href="#">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">Software Page</span>
			</a>
		</li>
		<li class="bold">
			<a class="waves-effect waves-cyan " href="#">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">Demo Page</span>
			</a>
		</li>
		<li class="bold">
			<a class="waves-effect waves-cyan " href="#">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">Login Page</span>
			</a>
		</li>



		{{-- <li class="active bold open">
			<a class="collapsible-header waves-effect waves-cyan " href="#" tabindex="0">
				<i class="material-icons">settings_input_svideo</i>
				<span class="menu-title" data-i18n="">Dashboard</span>
				<span class="badge badge pill orange float-right mr-10">3</span>
			</a>
          <div class="collapsible-body" style="display: block;">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="collapsible-body active" href="dashboard-modern.html" data-i18n="" style="display: block;">
              	<i class="material-icons">radio_button_unchecked</i>
              	<span>Modern</span>
              </a>
              </li>
              <li>
              	<a class="collapsible-body" href="dashboard-ecommerce.html" data-i18n="">
              		<i class="material-icons">radio_button_unchecked</i>
              		<span>eCommerce</span></a>
              </li>
              <li>
              	<a class="collapsible-body" href="dashboard-analytics.html" data-i18n="">
              		<i class="material-icons">radio_button_unchecked</i>
              		<span>Analytics</span></a>
              </li>
            </ul>
          </div>
        </li> --}}
		

	</ul>
	<div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav