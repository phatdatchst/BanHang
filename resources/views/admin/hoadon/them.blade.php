@extends('admin.layout.index') @section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Hóa Đơn <small>Thêm</small>
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
				@if(session('thongbao'))
    			 	<div class="alert alert-success">
    					{{ session('thongbao') }}
    				</div>
    			 @endif
				<form action="admin/hoadon/them" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label>Khách Hàng</label> <select class="form-control"
							name="khachhang" id="khachhang"> @foreach($khachhang as $kh)
							<option value="{{$kh->id}}">{{$kh->tenkh}}</option> @endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Nhân Viên</label> <select class="form-control"
							name="nhanvien" id="nhanvien"> @foreach($nhanvien as $nv)
							<option value="{{$nv->id}}">{{$nv->tennv}}</option> @endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Thành Tiền</label>
					    <input type="number" class="form-control" name="thanhtien" value="0" />
					</div>
					
					<div class="form-group">
						<label>Ngày Lập</label>
						<input type="date" name="ngaylap" id="demo" class="form-control ckeditor" >
					</div>
					<div class="form-group">
						<label>Trạng Thái</label>
						<input type="text" name="trangthai" class="form-control ckeditor" >
					</div>
					<div class="form-group">
						<label>Ghi Chú</label>
						<input type="text" class="form-control" name="ghichu" placeholder="Nhập Ghi Chú" />
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
@endsection @section('script')
<script type="text/javascript">
		$(document).ready(function(){
				$('#TheLoai').change(function(){
					var idTheLoai = $(this).val();
					$.get("admin/ajax/loaitin/" + idTheLoai,function(data){
						$('#LoaiTin').html(data);
					});
				});
		});
    </script>
@endsection
