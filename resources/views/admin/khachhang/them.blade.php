@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Tin Tức <small>Thêm</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			
			<div class="col-lg-7" style="padding-bottom: 120px">
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
							{{$err}} <br>
						@endforeach
					</div>
				@endif
				<form action="admin/khachhang/them" method="POST" >
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label>Tên Khách Hàng</label>
						<input type="text" class="form-control" name="tenkh" placeholder="Nhập Tên Khách Hàng" />
					</div>
					
					<div class="form-group">
						<label>Ngày Sinh</label>
						<input type="date" class="form-control" name="ngaysinh" placeholder="Chọn Ngày Sinh" />
					</div>
					<div class="form-group">
						<label>Địa Chỉ</label>
						<input type="text" class="form-control" name="diachi" placeholder="Nhập Địa Chỉ" />
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="email" placeholder="Nhập Email" />
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