@extends('layout.index')

@section('content')	
			<section class="main-content">				
				<div class="row">
					<div class="span12">					
						<h4 class="title"><span class="text"><strong>Giỏ Hàng</strong> Của Bạn</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Xóa</th>
									<th>Hình Ảnh</th>
									<th>Tên Sản Phẩm</th>
									<th>Quantity</th>
									<th>Giá</th>
									<th>Tổng Tiền</th>
								</tr>
							</thead>
							<tbody>
							<form method="POST" action="">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
    							@foreach($content as $item)
    								<tr>
    									<td><a href="xoasp/{{$item['rowId']}}">Xóa</a>
    									<td><img alt="" src="themes/images/cloth/{{$item['options']['hinhanh']}}" width="100px" height="100px"></td>
    									<td>{{$item['name']}}</td>
    									<td><input type="number" placeholder="0" class="input-mini qty" value="{{$item['qty']}}"></td>
    									<td>{{number_format($item['price'])}} VNĐ</td>
    									<td>{{number_format($item['price'] * $item['qty'])}} VNĐ</td>
    								</tr>	
    							@endforeach	
							</form>	  	  
							</tbody>
						</table>
						<hr>
						<p class="cart-total right">
							<strong>Tổng Tiền: </strong>{{$total}} VNĐ<br>
						</p>
						<hr/>
						<p class="buttons center">				
							<a href="sanpham/1" class="btn" type="button">Continue</a>
							<a href="thanhtoan" class="btn btn-inverse" type="submit" id="checkout">Checkout</a>
						</p>					
					</div>
				</div>
			</section>	
			@endsection			
			@section('script')
        		<script>
        			$(document).ready(function() {
        				$('#checkout').click(function (e) {
        					document.location.href = "checkout.html";
        				})
        			});
        		</script>
        		<script type="text/javascript" src="themes/js/myscript.js"></script>	
			@endsection