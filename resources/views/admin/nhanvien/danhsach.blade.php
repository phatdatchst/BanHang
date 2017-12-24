@extends('admin.layout.index') @section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Tin Tức <small>Danh Sách</small>
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
						<th>Tên Nhân Viên</th>
						<th>Email</th>
						<th>Số Điện Thoại</th>					
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($nhanvien as $nv)
					<tr class="odd gradeX" align="center">
						<td>{{$tt->id}}</td>
						<td>{{$tt->tennv}}</td>
						<td>{{$tt->email}}</td>
						<td>{{$tt->sdt}}</td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/nhanvien/xoa/{{$tt->id}}">Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nhanvien/sua/{{$tt->id}}">Edit</a></td>
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
