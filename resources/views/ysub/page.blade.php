@extends('layouts.back-end.app-seller')

@section('title', translate('Subscription'))

@section('content')

<section id="pricing" class="pricing-content section-padding mb-5">
	<div class="container mt-5 mx-3">					
		<div class="section-title text-center">
			<h2>Get yourself Subscribed</h2>
		</div>				
		<div class="row text-center flex items-center">									
			<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
				<div class="pricing_design">
					<div class="single-pricing">
						<div class="price-head">		
							<h2>Starter</h2>
							<h1 class="price">$14</h1>
							<span>/Monthly</span>
						</div>
						<ul>
							<li><b>Pro</b> Features</li>
							<li><b>Pro</b> Features</li>
							<li><b>Pro</b> Features</li>
							<li><b>Pro</b> Features</li>
							<li><b>Pro</b> Features</li>
							
						</ul>
						<div class="pricing-price">
							
						</div>
						<a href="#" class="price_btn">Order Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
				<div class="pricing_design">
					<div class="single-pricing">
						<div class="price-head">		
							<h2>Personal</h2>
							<h1 class="price">$29</h1>
							<span>/Monthly</span>
						</div>
						<ul>
							<li>More <b>pro</b> features</li>
							<li>More <b>pro</b> features</li>
							<li>More <b>pro</b> features</li>
							<li>More <b>pro</b> features</li>
							<li>More <b>pro</b> features</li>
							
						</ul>
						<div class="pricing-price">
							
						</div>
						<a href="#" class="price_btn">Order Now</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<style>
	.pricing-content{position:relative;}
.pricing_design{
    position: relative;
    margin: 0px 15px;
}
.pricing_design .single-pricing{
    background:#FED12E;
    padding: 60px 40px;
    border-radius:30px;
    box-shadow: 0 10px 40px -10px rgba(0,64,128,.2);
    position: relative;
    z-index: 1;
}
.pricing_design .single-pricing:before{
    content: "";
    background-color: #fff;
    width: 100%;
    height: 100%;
    border-radius: 18px 18px 190px 18px;
    border: 1px solid #eee;
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: -1;
}
.price-head{}
.price-head h2 {
	margin-bottom: 20px;
	font-size: 26px;
	font-weight: 600;
}
.price-head h1 {
	font-weight: 600;
	margin-top: 30px;
	margin-bottom: 5px;
}
.price-head span{}

.single-pricing ul{list-style:none;margin-top: 30px;}
.single-pricing ul li {
	line-height: 36px;
}
.single-pricing ul li i {
	background: #FED12E;
	color: #fff;
	width: 20px;
	height: 20px;
	border-radius: 30px;
	font-size: 11px;
	text-align: center;
	line-height: 20px;
	margin-right: 6px;
}
.pricing-price{}

.price_btn {
	background: #FED12E;
	padding: 10px 30px;
	color: #fff;
	display: inline-block;
	margin-top: 20px;
	border-radius: 2px;
	-webkit-transition: 0.3s;
	transition: 0.3s;
}
.price_btn:hover{background:#0b0b0b;
color: #fff}
a{
text-decoration:none;    
}

.section-title {
    margin-bottom: 60px;
}
.text-center {
    text-align: center!important;
}

.section-title h2 {
    font-size: 45px;
    font-weight: 600;
    margin-top: 0;
    position: relative;
    text-transform: capitalize;
}

.price {
	font-size: 400% !important;
}

</style>

@endsection('content')