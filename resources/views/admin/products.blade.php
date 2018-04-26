@extends('admin.layout.master')

@section('title', 'Sản phẩm')
@section('content')
    
 <div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Danh sách sản phẩm</h3>
	</div>
	<div class="col-md-4">
        <a style="float: right;" class="btn btn-default" href="{{ route('admin.showProductCreateForm') }}"><i class="fa fa-plus-square"></i> Tạo mới</a>
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
												<th>Tên sản phẩm</th>
												<th>Hình ảnh</th>
												<th>Nhóm phụ</th>
												<th>Thời điểm cập nhật</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($products as $product)
											<tr data-toggle="tooltip" data-placement="bottom" title="Không được phép xóa hay thay đổi dữ liệu mẫu. Hãy tạo mới để sử dụng">
												<td>{{ $product->id }}</td>
												<td>
													@if($product->id >= 1 && $product->id <= 114)
														{{ $product->name }}
													@else
														<a href="{{ route('admin.editProductForm', ['id' => $product->id]) }}">
															{{ $product->name }}
														</a>
													@endif
												</td>
												<td><img style="max-height: 100px; max-width: auto" src="{{ asset($product->image) }}" alt="{{ $product->name }}"></td>
												<td>{{ $product->hasSubCategory->name }}</td>
												<td>
													{{ Carbon\Carbon::parse($product->updated_at)->format('h:i A . d-m-Y') }}
												</td>
												<td>
													@if($product->id >= 1 && $product->id <= 114)
														
													@else
														<a data-toggle="modal" data-target="#delete-{{ $product->id }}"><i class="fa fa-trash"></i></a>
													@endif
												</td>
											</tr>
											<div class="modal fade" id="delete-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
											  <div class="modal-dialog modal-sm" role="document">
											    <div class="modal-content" style=" text-align: center">
											    	<div class="modal-header">
											  			Cửa sổ xác nhận
											  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											  		</div>
											  		<div class="modal-body" style="color: red;">
											      		<p>Bạn chắc chắn xóa sản phẩm "{{ $product->name }}"?</p>
											      	</div>
											      	<div class="modal-footer">
											      		<form method="post" action="{{ route('admin.deleteProduct', ['procuctId' => $product->id]) }}">
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
										{{ $products->links() }}
									</div>
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
