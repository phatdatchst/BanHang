@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Loại Tin <small></small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom: 120px">
				<form action="admin/loaitin/sua/{{$loaitin->id}}" method="POST">
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
					<button type="submit" class="btn btn-default">Sửa</button>
					<button type="reset" class="btn btn-default">Làm Mới</button>
					</form>
			
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection