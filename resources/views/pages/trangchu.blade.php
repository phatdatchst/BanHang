@extends('layout.index')
@section('content')
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
		
			<section class="main-content">
				<div class="row">
					<div class="span12">
					@foreach($nhomsp as $nhom)													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line"> <strong>{{$nhom->tennhom}}</strong></span></span></span>
								</h4>
								<div class="row">
										<div class="item" style="margin-left: 30px;">
									<ul class="thumbnails">												
										<li class="span3">
										@php
										$sanphamtheodanhmuc=$sanpham->where('manhomsp', $nhom['id']);
										@endphp
										@foreach($sanphamtheodanhmuc as $sp)
											<div class="product-box">
												<span class="sale_tag"></span>
												<p><a href="{{route('chitietsanpham', $sp->id)}}"><img src="themes/images/cloth/{{$sp->hinhanh}}" alt="" width="169px" height="220px"/></a></p>
												<a href="{{route('chitietsanpham', $sp->id)}}" class="title">{{$sp->tensp}}</a><br/>
												<a href="{{route('chitietsanpham', $sp->id)}}" class="title">{{$sp->chitiet}}</a><br/>
												<p class="price">{{$sp->giaban}}</p>
											</div>
										@endforeach
										</li>
										
									</ul>
								</div>
								</div>
							</div>						
						</div>
						
						@endforeach
						
						<br/>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
				
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			@endsection	
			@section('script')
			<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
			@endsection		