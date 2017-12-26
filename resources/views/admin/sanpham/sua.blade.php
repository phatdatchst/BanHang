@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Sản Phẩm <small>{{$sanpham->tensp}}</small>
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
				<form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label>Tên sản phẩm</label> 
						<input class="form-control" name="tensp" placeholder="Nhập Tên sản phẩm" value="{{$sanpham->tensp}}" />
					</div>
					<div class="form-group">
						<label>Chi tiết</label> 
						<input class="form-control" name="chitiet" placeholder="Nhập chi tiết"value="{{$sanpham->chitiet}}"  />
					</div>
					<div class="form-group">
						<label>Giá nhập</label> 
						<input class="form-control" name="gianhap" placeholder="Nhập giá nhập" value="{{$sanpham->gianhap}}" />
					</div>
					<div class="form-group">
						<label>Giá bán</label> 
						<input class="form-control" name="giaban" placeholder="Nhập giá bán" value="{{$sanpham->giaban}}"  />
					</div>
					<div class="form-group">
						<label>Số Lượng</label> 
						<input class="form-control" name="soluong" type="number" placeholder="Nhập số lượng"value="{{$sanpham->soluong}}"  />
					</div>
					
					<div class="form-group">
						<label>Hình Ảnh</label>
						<img width="400px" src ="upload/images/{{$sanpham->hinhanh}}">
						<input type="file" class="form-control" name="hinhanh" />
						
					</div>
					<div class="form-group">
						<label>Trạng thái</label> 
						<input class="form-control" name="trangthai" placeholder="Nhập trạng thái"value="{{$sanpham->trangthai}}"  />
					</div>
					<div class="form-group">
						<label>Ngày nhập</label> 
						<input type="date"form-control" name="ngaynhap" placeholder="Nhập ngày nhập hàng" value="{{$sanpham->ngaynhap}}" />
					</div>
					<label>Nhóm Sản Phẩm</label> <select class="form-control"
							name="manhomsp" id="TheLoai">
						 @foreach($nhomsp as $nsp)
							<option
								@if($sanpham->manhomsp == $nsp->id)
									{{ "selected" }}
								@endif
							 	value="{{$nsp->id}}">{{$nsp->id}}
							 </option>
						 @endforeach
						</select>
					<label>Mã Nhà Cung Cấp</label> <select class="form-control"
							name="mancc" id="TheLoai">
						 @foreach($nhacungcap as $ncc)
							<option
								@if($nhacungcap->mancc == $ncc->id)
									{{ "selected" }}
								@endif
							 	value="{{$ncc->id}}">{{$ncc->id}}
							 </option>
						 @endforeach
						</select>
					<button type="submit" class="btn btn-default">Sửa</button>
					<button type="reset" class="btn btn-default">Làm Mới</button>
					<form>
			
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