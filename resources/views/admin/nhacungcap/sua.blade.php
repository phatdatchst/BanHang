@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Nhà cung cấp <small>{{$nhacungcap->tenncc}}</small>
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
						{{session('thongbao')}}
					</div>
				@endif
				<form action="admin/nhacungcap/sua/{{$nhacungcap->id}}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<<div class="form-group">
						<label>Tên Nhà Cung Cấp</label> <input class="form-control" name="tenncc"
							placeholder="Nhập tên nhà cung cấp" value="{{$nhacungcap->tenncc}}"/>
					</div>
					
					<div class="form-group">
						<label>Quốc Gia</label>
						<input class="form-control" name="quocgia" placeholder="Nhập tên quốc gia" value="{{$nhacungcap->quocgia}}" />
					</div>
					<div class="form-group">
						<label>Số Điện Thoại</label>
						<input class="form-control" name="sdt" type="number" placeholder="Nhập số điện thoại" value="{{$nhacungcap->sdt}}" />
					</div>
					<div class="form-group">
						<label>Địa Chỉ</label>
						<input class="form-control" name="diachi" placeholder="Nhập địa chỉ" value="{{$nhacungcap->diachi}}"/>
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