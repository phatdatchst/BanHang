<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
						@if(Auth::check())
						<li><a href="">Chào bạn {{Auth::user()->name}}</a></li>
							@if(Auth::user()->quyen == 1)
							<li><a href="{{route('test')}}">Di Chuyển Trang Back-end</a></li>
							@endif
						<li><a href="{{route('logout')}}">Đăng xuất</a></li>		
						@else				
							<li><a href="#">My Account</a></li>
<<<<<<< HEAD
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>								
							<li><a href="{{route('signin')}}">Đăng Kí</a></li>
							<li><a href="{{route('login')}}">Đăng Nhập</a></li>
							@endif			
=======
							<li><a href="cart.html">Giỏ Hàng</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="register.html">Login</a></li>		
>>>>>>> 9cd75fb5eb19eb805d7d5b9de740bffa24e0697a
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="./trangchu" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
						@foreach($nhomsp as $nsp)
							<li><a href="{{route('nhomsp',$nsp->id)}}">{{$nsp->tennhom}}</a></li>		
							@endforeach
						</ul>
					</nav>
				</div>
			</section>