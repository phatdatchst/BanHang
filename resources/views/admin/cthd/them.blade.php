@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Chi Tiết Hóa Đơn <small>Thêm</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom: 120px">
    			@if(count($errors)>0)
    				<div class="alert alert-danger">
    					@foreach($errors->all() as $err)
    					{{ $err }} <br>
    					@endforeach
    				</div>
    			 @endif
    			 @if(session('thongbao'))
    			 	<div class="alert alert-success">
    					{{ session('thongbao') }}
    				</div>
    			 @endif
				<form action="admin/chitiet/them" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label>Mã Hóa Đơn</label> <select class="form-control"
							name="TheLoai" id="TheLoai"> @foreach($hoadon as $hd)
							<option value="{{$hd->id}}">{{$hd->id}}</option> @endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Sản Phẩm</label> <select class="form-control"
							name="LoaiTin" id="LoaiTin"> @foreach($sanpham as $sp)
							<option value="{{$sp->id}}">{{$sp->tensp}}</option> @endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Số Lượng</label>
						<input type="number" class="form-control" name="soluong" value="0" />
					</div>
					<div class="form-group">
						<label>Tổng Giá</label>
						<input type="number" class="form-control" name="tonggia" value="0"/>
					</div>
					<button type="submit" class="btn btn-default">Thêm</button>
					<button type="reset" class="btn btn-default">Làm Mới</button>
					</form>
			
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
@endsection