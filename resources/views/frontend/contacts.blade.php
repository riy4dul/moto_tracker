@extends('frontend.layouts.master')
@section('content')
<!-- Start Breadcumbs Area -->
<div class="breadcumbs-area breadcumbs-bg-2 bc-area-padding">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>Contact us</h2>
						<span><a href="{{route('/')}}">home</a> / Contact us</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcumbs Area -->
<!-- Google Map Area -->
{{-- <div id="map"></div> --}}
{{-- <div class="content-block-area"> --}}
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div style="margin:0px;padding:0px;overflow:hidden">
					
					<iframe width="100%" height="auto" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					{{-- <iframe width="100%" height="auto" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> --}}
				</div>
			
				</div>
			</div>
		</div>
	{{-- </div> --}}
	<!-- Google Map Area -->
	@endsection