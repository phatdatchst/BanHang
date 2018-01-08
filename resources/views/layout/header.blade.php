<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="get" class="search_form" action="{{route('timkiem')}}">
						<input type="text" name="key" class="input-block-level search-query" Placeholder="eg. T-sirt">
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
							

							<li><a href="./gio-hang">Giỏ Hàng</a></li>
							<li><a href="./thanhtoan">Thanh Toán</a></li>								
							<li><a href="{{route('signin')}}">Đăng Kí</a></li>
							<li><a href="{{route('login')}}">Đăng Nhập</a></li>
							@endif			

							

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