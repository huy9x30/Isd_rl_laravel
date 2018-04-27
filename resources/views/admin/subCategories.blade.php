@extends('admin.layout.master')

@section('title', 'Nhóm sản phẩm phụ')
@section('content')
    
<div class="row">
	<div class="col-md-8" style="margin-bottom: 10px">
    	<h3 class="page-title">Danh sách nhóm sản phẩm phụ</h3>
	</div>
	<div class="col-md-4">
        <a style="float: right;" class="btn btn-default" href="{{ route('admin.subCategories.create') }}"><i class="fa fa-plus-square"></i> Tạo mới</a>
	</div>
</div>
	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	    </div>
	@endif
	@if (session('error'))
	    <div class="alert alert-danger">
	        {{ session('error') }}
	    </div>
	@endif
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-body table-reponsible">
									<table class="table table-hover" style="table-layout: fixed; width: 100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Nhóm phụ</th>
												<th>Nhóm chính</th>
												<th>Thời điểm cập nhật</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($subCategories as $subCategory)
											<tr data-toggle="tooltip" data-placement="bottom" title="Không được phép xóa hay thay đổi dữ liệu mẫu. Hãy tạo mới để sử dụng">
												<td>{{ $subCategory->id }}</td>
												<td>
														<a href="{{ route('admin.subCategories.edit', ['id' => $subCategory->id]) }}">
															{{ $subCategory->name }}
														</a>
												</td>
												<td>{{ $subCategory->hasCategory->name }}</td>
												<td>
													{{ Carbon\Carbon::parse($subCategory->updated_at)->format('h:i A . d-m-Y') }}
												</td>
												<td style="text-align: center;">
														<button class="btn btn-default" data-toggle="modal" data-target="#delete-{{ $subCategory->id }}"><i class="fa fa-trash"></i></button>
												</td>
											</tr>
											<div class="modal fade" id="delete-{{ $subCategory->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
											  <div class="modal-dialog modal-sm" role="document">
											    <div class="modal-content" style=" text-align: center">
											    	<div class="modal-header">
											  			Cửa sổ xác nhận
											  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											  		</div>
											  		<div class="modal-body" style="color: red;">
											  			<p>Xóa nhóm phụ sẽ xóa toàn bộ sản phẩm của chúng</p> <br>
											      		<p>Bạn chắc chắn xóa nhóm "{{ $subCategory->name }}"?</p>
											      	</div>
											      	<div class="modal-footer">
											      		<form method="post" action="{{ route('admin.subCategories.destroy', ['subCategoryid' => $subCategory->id]) }}">
											      			@method('DELETE')
														@csrf
													    	<button class="btn btn-danger" type="submit">Xác nhận</button>
												    	</form>
													    	<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
											    	</div>
											    </div>
											  </div>
											</div>
											@endforeach
										</tbody>
									</table>
									<div style="text-align: center">
										{{ $subCategories->links() }}
									</div>
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
