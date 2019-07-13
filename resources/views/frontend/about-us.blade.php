@extends('frontend.layouts.master')
@section('content')
<!-- Start Breadcumbs Area -->
<div class="breadcumbs-area breadcumbs-bg-2 bc-area-padding">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>About us</h2>
						<span><a href="{{route('/')}}">home</a> / About us</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcumbs Area -->
<<!-- Start Top Banner Area -->
        <div class="content-block-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="banner-man-boxed banner-man-bg"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="banner-boxed">
                            <h2>Helping and providing <span>best service</span> to our customer <span>over 25 years!!</span></h2>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit Perfer repudiandae nostrum alias quibusdam!</p>
                            <p>No singulis postulant his, per decore elaboraret sadipscing Id namwisi accusamus dolro ametmoderatius, denique mediocrem voluptatum. per decore elaboraret sadipscing te labitursaperetnec amet. Eos in quis eripuit. Minim theophrastus eum id. Eos an graece libris inter- esset. Eu duo mentitum maluisset </p>
                            <div class="signature">
                                <img src="assets/img/signature.png" alt="Image Description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Banner Area -->
        
        <!-- Start Why Choose Us Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                       <div class="section-title text-center">
                           <h2><span>Why choose</span> us</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                       </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">01</span>
                            <span class="single-boxed"><i class="flaticon-crane"></i></span>
                            <h3>Car Inspection</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">02</span>
                            <span class="single-boxed"><i class="flaticon-wheel-1"></i></span>
                            <h3>Tires Services</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">03</span>
                            <span class="single-boxed"><i class="flaticon-speedometer"></i></span>
                            <h3>Schedule Service</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">04</span>
                            <span class="single-boxed"><i class="flaticon-car-radio"></i></span>
                            <h3>Radiator Repair</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us Area -->

         <!-- Start Our Parners Area -->
    <div class="content-block-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2><span>Our  Clients</span></h2>
                        <div class="car-icon"><img src="{{asset('')}}frontend/assets/img/cars.png" alt="car"></div>
                        <p>Our first priority is clients. As they use lots of vehicles they need to manage their fleet, locate them properly, keep their record of route, mileage, average speed, information regarding whether they have reached their destination or not, real time location, etc. for the ease of transport management. </p>
                    </div>
                </div>
            </div>
            <div class="partner-slides">
                @foreach($clients as $key=>$client)
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{asset('frontend/assets/img/client/'.$client->photo)}}" alt="Image Description"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Our Parners Area -->
         
       
        
        
	@endsection