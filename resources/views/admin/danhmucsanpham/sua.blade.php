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
						<label>Thể Loại</label>
						 <select class="form-control" name="TheLoai">
					    							  	
							   <option>
    						  	</option>							    
						</select>
					</div>
					<div class="form-group">
						<label>Tên Loại Tin</label>
						<input class="form-control" name="Ten" placeholder="Nhập Loại Tin" value="{{$loaitin->Ten}}"/>
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