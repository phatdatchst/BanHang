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
				<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Bình Luận <small>Danh Sách</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			@if(session('thongbao'))
					<div class="alert alert-success">
						{{session('thongbao')}}
					</div>
			@endif
			<table class="table table-striped table-bordered table-hover"
				id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Người Dùng</th>
						<th>Nội Dung</th>
						<th>Ngày Đăng</th>				
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tintuc->comment as $cm)
					<tr class="odd gradeX" align="center">
						<td>{{$cm->id}}</td>
						<td>{{$cm->user->name}}</td>
						<td>{{$cm->NoiDung}}</td>
						<td>{{$cm->created_at}}</td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->id}}/{{$tintuc->id}}">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


@endsection