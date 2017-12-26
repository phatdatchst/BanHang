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
						<input class="form-control" name="tensp" placeholder="Nhập Tên sản phẩm" />
					</div>
					<div class="form-group">
						<label>Chi tiết</label> 
						<input class="form-control" name="chitiet" placeholder="Nhập chi tiết" />
					</div>
					<div class="form-group">
						<label>Giá nhập</label> 
						<input class="form-control" name="gianhap" placeholder="Nhập giá nhập" />
					</div>
					<div class="form-group">
						<label>Giá bán</label> 
						<input class="form-control" name="giaban" placeholder="Nhập giá bán" />
					</div>
					<div class="form-group">
						<label>Số Lượng</label> 
						<input class="form-control" name="soluong" type="number" placeholder="Nhập số lượng" />
					</div>
					
					<div class="form-group">
						<label>Hình Ảnh</label>
						<img width="100px" src ="upload/images/{{$sanpham->hinhanh}}">
						<input type="file" class="form-control" name="hinhanh" />
					</div>
					<div class="form-group">
						<label>Trạng thái</label> 
						<input class="form-control" name="trangthai" placeholder="Nhập trạng thái" />
					</div>
					<div class="form-group">
						<label>Ngày nhập</label> 
						<input type="date" class="form-control" name="ngaynhap" placeholder="Nhập ngày nhập hàng" />
					</div>
					<div class="form-group">
						<label>Mã Nhóm Sản Phẩm</label>
						 <select class="form-control"
							name="manhomsp" id="HoaDon"> @foreach($nhomsp as $nsp)
							<option value="{{$nsp->id}}">{{$nsp->id}}</option> @endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Mã Nhà Cung Cấp</label>
						 <select class="form-control"
							name="mancc" id="HoaDon"> @foreach($nhacungcap as $ncc)
							<option value="{{$ncc->id}}">{{$ncc->id}}</option> @endforeach
						</select>
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
