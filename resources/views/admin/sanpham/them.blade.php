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
				<form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<div class="form-group">
						<label>Tên sản phẩm</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập Tên sản phẩm" />
					</div>
					<div class="form-group">
						<label>Chi tiết</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập chi tiết" />
					</div>
					<div class="form-group">
						<label>Giá nhập</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập giá nhập" />
					</div>
					<div class="form-group">
						<label>Giá bán</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập giá bán" />
					</div>
					<div class="form-group">
						<label>Số Lượng</label> 
						<input class="form-control" name="TieuDe" type="number" placeholder="Nhập số lượng" />
					</div>
					
					<div class="form-group">
						<label>Hình Ảnh</label>
						<input type="file" class="form-control" name="Hinh" />
					</div>
					<div class="form-group">
						<label>Trạng thái</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập trạng thái" />
					</div>
					<div class="form-group">
						<label>Ngày nhập</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập ngày nhập hàng" />
					</div>
					<div class="form-group">
						<label>Mã nhóm sản phẩm</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập mã nhóm sản phẩm" />
					</div>
					<div class="form-group">
						<label>Mã nhà cung cấp</label> 
						<input class="form-control" name="TieuDe" placeholder="Nhập mã nhà cung cấp" />
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
