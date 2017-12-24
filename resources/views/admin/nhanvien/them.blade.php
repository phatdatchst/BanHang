@extends('admin.layout.index') @section('content')
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
				<form action="admin/nhanvien/them" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<div class="form-group">
						<label>Tên Nhân Viên</label>
						 <input class="form-control" name="tennv" placeholder="Nhập Tên Nhân Viên" />
					</div>
					
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" name="email" placeholder="Nhập email" />
					</div>
					<div class="form-group">
						<label>Số Điện Thoại</label>
						<input class="form-control" name="sdt" type="number" placeholder="Nhập số điện thoại" />
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
				$('#NhanVien').change(function(){
					var manv = $(this).val();
					$.get("admin/ajax/loaitin/" + idTheLoai,function(data){
						$('#LoaiTin').html(data);
					});
				});
		});
    </script>
@endsection
