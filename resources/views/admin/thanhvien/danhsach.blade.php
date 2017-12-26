@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Thành Viên <small>Danh Sách</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<table class="table table-striped table-bordered table-hover"
				id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Mã khách hàng</th>
						<th>Tên thành viên</th>
						<th>Tài khoản</th>
						<th>Mật khẩu</th>
						<th>Điểm tích lũy</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
				@foreach($thanhvien as $tv)
					<tr class="odd gradeX" align="center">
						<td>{{$tv->id}}</td>
						<td>{{$tv->makh}}</td>
						<td>{{$tv->tentv}}</td>
						<td>{{$tv->taikhoan}}</td>
						<td>{{$tv->matkhau}}</td>
						<td>{{$tv->diemtichluy}}</td>
						
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/thanhvien/xoa/{{$tv->id}}">Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/thanhvien/sua/{{$tv->id}}">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection