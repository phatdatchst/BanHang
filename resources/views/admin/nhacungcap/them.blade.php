@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Nhà Cung Cấp <small>Thêm</small>
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
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label>Nhà Cung Cấp</label> <select class="form-control"
							name="TheLoai" id="TheLoai">
							 @foreach($nhacungcap as $ncc)
							<option value="{{$ncc->id}}">{{$ncc->id}}</option>
							<option value="{{$ncc->tenncc}}">{{$ncc->tenncc}}</option>
							<option value="{{$ncc->quocgia}}">{{$ncc->quocgia}}</option>
							<option value="{{$ncc->sdt}}">{{$ncc->sdt}}</option>
							<option value="{{$ncc->diachi}}">{{$ncc->diachi}}</option>
							 @endforeach
						</select>
					</div>
					
					<div class="form-group">
						<label>Tên Nhà Cung Cấp</label> <input class="form-control" name="tenncc"
							placeholder="Nhập tên nhà cung cấp»�" />
					</div>
					
					<div class="form-group">
						<label>Quốc Gia</label>
						<textarea name="TomTat" id="demo" class="form-control ckeditor" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label>Số Điện Thoại</label>
						<textarea name="NoiDung" id="demo" class="form-control ckeditor" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label>Địa Chỉ</label>
						<input type="file" class="form-control" name="Hinh" />
					</div>
					
					<button type="submit" class="btn btn-default">Thêm</button>
					<button type="reset" class="btn btn-default">Làm mới</button>
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
				$('#NhaCungCap').change(function(){
					var mancc = $(this).val();
					$.get("admin/ajax/loaitin/" + idTheLoai,function(data){
						$('#LoaiTin').html(data);
					});
				});
		});
    </script>
@endsection
