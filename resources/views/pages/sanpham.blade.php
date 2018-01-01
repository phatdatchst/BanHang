@extends('layout.index')

@section('content')
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span12">								
						<ul class="thumbnails listing-products">
							<li class="span3">
							@foreach($nhomsp as $nsp)
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="./chitietsanpham"><img alt="" src="themes/images/cloth/{{$nsp->hinhanh}}"></a><br/>
									<a href="./chitietsanpham" class="title">{{$nsp->tensp}}</a><br/>
									<a href="./chitietsanpham" class="category">{{$nsp->chitiet}}</a>
									<p class="price">{{$nsp->giaban}} đồng</p>
								</div>
								@endforeach
							</li>       
							
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
@endsection

@section('script')
	<script src="themes/js/common.js"></script>	
@endsection