@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Danh Mục <small>Danh Sách</small>
				</h1>
			</div>
			@if(session('thongbao'))
    			 	<div class="alert alert-success">
    					{{ session('thongbao') }}
    				</div>
    	    @endif
			<!-- /.col-lg-12 -->
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Tên Danh Mục</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
				@foreach($nhomsp as $dm)
					<tr class="odd gradeX" align="center">
						<td>{{ $dm->id }}</td>
						<td>{{ $dm->tennhom }}</td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/danhmuc/xoa/{{ $dm->id }}">Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/danhmuc/sua/{{ $dm->id }}">Edit</a></td>
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