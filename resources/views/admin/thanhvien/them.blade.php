@extends('admin.layout.index') @section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Sản Phẩm <small>Thêm</small>
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
						<label>Mã khách hàng</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập mã khách hàng" />
					</div>
					<div class="form-group">
						<label>Tên thành viên</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập tên thành viên" />
					</div>
					<div class="form-group">
						<label>Tài khoản</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập tài khoản" />
					</div>
					<div class="form-group">
						<label>Mật khẩu</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập mật khẩu" />
					</div>
					<div class="form-group">
						<label>Điểm tích lũy</label> 
						<input class="form-control" name="TieuDe" type="number" placeholder="Nhập điểm" />
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
				$('#ThanhVien').change(function(){
					var matv = $(this).val();
					$.get("admin/ajax/loaitin/" + idTheLoai,function(data){
						$('#LoaiTin').html(data);
					});
				});
		});
    </script>
@endsection
