@extends('admin.layout.index') @section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Thành viên <small>Thêm</small>
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
				<form action="admin/thanhvien/them" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<div class="form-group">
						<label>Mã Khách Hàng</label> <select class="form-control"
							name="khachhang" id="khachhang"> @foreach($khachhang as $kh)
							<option value="{{$kh->id}}">{{$kh->id}}</option> @endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Tên thành viên</label> 
						<input class="form-control" name="tentv" placeholder="Nhập tên thành viên" />
					</div>
					<div class="form-group">
						<label>Tài khoản</label> 
						<input class="form-control" name="taikhoan" placeholder="Nhập tài khoản" />
					</div>
					<div class="form-group">
						<label>Mật khẩu</label> 
						<input class="form-control" name="matkhau" placeholder="Nhập mật khẩu" />
					</div>
					<div class="form-group">
						<label>Điểm tích lũy</label> 
						<input class="form-control" name="diemtichluy" type="number" placeholder="Nhập điểm" />
					</div>
					
					
					<button type="submit" class="btn btn-default">Sửa</button>
					<button type="reset" class="btn btn-default">Làm Mới</button>
					</form>
			
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
@endsection @section('script')
<script type="text/javascript">
		$(document).ready(function(){
				$('#ThanhVien').change(function(){
					var matv = $(this).val();
					$.get("admin/ajax/loaitin/" + idTheLoai,function(data){
						$('#LoaiTin').html(data);
					});
				});
		});
    </script>
@endsection
