@extends('admin.layout.master')

@section('title', 'Sản phẩm')
@section('content')
    
 <div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Danh sách sản phẩm</h3>
	</div>
	<div class="col-md-4">
        <a style="float: right;" class="btn btn-default" href="{{ route('admin.products.create') }}"><i class="fa fa-plus-square"></i> Tạo mới</a>
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
												<th>@sortablelink('id', 'Mã số')</th>
												<th>@sortablelink('name', 'Tên sản phẩm')</th>
												<th>Hình ảnh</th>
												<th>@sortablelink('hasSubCategory.name', 'Nhóm phụ')</th>
												<th>@sortablelink('updated_at', 'Thời điểm cập nhật')</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($products as $product)
											<tr>
												<td>{{ $product->id }}</td>
												<td>
														<a href="{{ route('admin.products.edit', ['id' => $product->id]) }}">
															{{ $product->name }}
														</a>
												</td>
												<td><img style="max-height: 100px; max-width: 100px" src="{{ asset($product->image) }}" alt="{{ $product->name }}"></td>
												<td>{{ $product->hasSubCategory->name }}</td>
												<td>
													{{ Carbon\Carbon::parse($product->updated_at)->format('h:i A . d-m-Y') }}
												</td>
												<td>
														<button class="btn btn-default" data-toggle="modal" data-target="#delete-{{ $product->id }}"><i class="fa fa-trash"></i></button>
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
											      		<form method="post" action="{{ route('admin.products.destroy', ['procuctId' => $product->id]) }}">
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
										{!! $products->appends(\Request::except('page'))->render() !!}
									</div>
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
