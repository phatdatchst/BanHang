@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Tin Tức <small>{{$tintuc->TieuDe}}</small>
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
				<form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label>Mã Khách Hàng</label> <select class="form-control"
							name="khachhang" id="khachhang">
						 @foreach($khachhang as $kh)
							<option
								@if($hoadon->makh == $kh->id)
									{{ "selected" }}
								@endif
							 	value="{{$kh->id}}">{{$kh->tenkh}}
							 </option>
						 @endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Nhân viên</label> <select class="form-control"
							name="nhanvien" id="nhanvien">
						 @foreach($nhanvien as $nv)
							<option
								@if($hoadon->manv == $nv->id)
									{{ "selected" }}
								@endif
							 	value="{{$nv->id}}">{{$lt->tennv}}
							</option>
						 @endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Thành Tiền</label>
						<input type="number" class="form-control" name="thanhtien" value="{{$hoadon->thanhtien}}"/>
					</div>
					
					<div class="form-group">
						<label>Ngày Lập</label>
						<input type="date" name="ngaylap" class="form-control ckeditor" value="{{$hoadon->ngaylap}}">
					</div>
					<div class="form-group">
						<label>Trạng Thái</label>
						<input name="trangthai" class="form-control ckeditor" value="{{$hoadon->trangthai}}">
					</div>
					<div class="form-group">
						<label>Ghi Chú</label>
						<input type="text" class="form-control" name="ghichu" value="{{$hoadon->ghichu}}" />
					</div>
					<button type="submit" class="btn btn-default">Sửa</button>
					<button type="reset" class="btn btn-default">Làm Mới</button>
					</form>
			
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


@endsection