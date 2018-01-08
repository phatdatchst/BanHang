@extends('admin.layout.index') @section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Sản Phẩm <small>Danh Sách</small>
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
						<th>Tên Sản Phẩm</th>
						<th>Chi Tiết</th>
						<th>Giá Nhập</th>
						<th>Giá Bán</th>
						<th>Số Lượng</th>
						<th>Hình Ảnh</th>
						<th>Trạng Thái</th>
						<th>Ngày Nhập</th>
						<th>Nhóm Sản Phẩm</th>
						<th>Nhà Cung Cấp</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($sanpham as $sp)
					<tr class="odd gradeX" align="center">
						<td>{{$sp->id}}</td>
						<td>{{$sp->tensp}}</td>
						<td>{{$sp->chitiet}}</td>
						<td>{{$sp->gianhap}}</td>
						<td>{{$sp->giaban}}</td>
						<td>{{$sp->soluong}}</td>
						<td>
						  <p>{{$sp->hinhanh}}</p>
						  <img width="100px" alt="" src="themes/images/cloth/{{$sp->hinhanh}}"/>
						</td>
						<td>{{$sp->trangthai}}</td>
						<td>{{$sp->ngaynhap}}</td>
						<td>{{$sp->tennhom}}</td>
						<td>{{$sp->tenncc}}</td>		
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}">Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Edit</a></td>
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
