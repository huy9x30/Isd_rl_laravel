@extends('admin.layout.master')

@section('title', 'Nhóm sản phẩm chính')
@section('content')
<div class="row" style="margin-bottom: 10px">
	<div class="col-md-8">
    	<h3 class="page-title">Danh sách nhóm sản phẩm chính</h3>
	</div>
	<div class="col-md-4">
        <a style="float: right;" class="btn btn-default" href="{{ route('admin.categories.create') }}"><i class="fa fa-plus-square"></i> Tạo mới</a>
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
												<th>ID</th>
												<th>Nhóm chính</th>
												<th>Thời điểm cập nhật</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($categories as $category)
											<tr data-toggle="tooltip" data-placement="bottom" title="Không được phép xóa hay thay đổi dữ liệu mẫu. Hãy tạo mới để sử dụng">
												<td>{{ $category->id }}</td>
												<td>
														<a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}">{{ $category->name }}</a>
												</td>
												<td>
													{{ Carbon\Carbon::parse($category->updated_at)->format('h:i A . d-m-Y') }}
												</td>
												<td style="text-align: center;">
														<button class="btn btn-default" data-toggle="modal" data-target="#delete-{{ $category->id }}"><i class="fa fa-trash"></i></button>
												</td>
											</tr>
											<div class="modal fade" id="delete-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
											  <div class="modal-dialog modal-sm" role="document">
											    <div class="modal-content" style=" text-align: center">
											    	<div class="modal-header">
											  			Cửa sổ xác nhận
											  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											  		</div>
											  		<div class="modal-body" style="color: red;">
											  			<p>Xóa nhóm chính sẽ xóa toàn bộ nhóm phụ và sản phẩm của chúng</p> <br>
											      		<p>Bạn chắc chắn xóa nhóm "{{ $category->name }}"?</p>
											      	</div>
											      	<div class="modal-footer">
											      		<form method="post" action="{{ route('admin.categories.destroy', ['id' => $category->id]) }}">
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
										{{ $categories->links() }}
									</div>
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
