@extends('frontend.layouts.master')
@section('content')
<!-- Start Breadcumbs Area -->
<div class="breadcumbs-area breadcumbs-bg-2 bc-area-padding">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>Price & Packagee</h2>
						<span><a href="{{route('/')}}">home</a> / Price & Packagee</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcumbs Area -->

 <!-- Start Services Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                	@foreach($pakages as $pakage)
                    <div class="col-lg-3 col-md-6">
                        <div class="pricingTable orange">
                            <div class="pricingTable-header">
                                <span class="price-value">{{$pakage->price}}<span class="currency">৳</span></span>
                                <h3 class="title">{{$pakage->title}}</h3>
                            </div>
                            <ul class="pricing-content">
                                {{-- <li>{{$pakage->sub_title}}</li> --}}
                                <li>{!! $pakage->description !!}</li>
                            </ul>
                            {{-- <a href="#" class="pricingTable-signup">Sign Up</a> --}}
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="space-tb-30"></div>
                
                
            </div>
        </div>
        <!-- End Services Area -->
	@endsection