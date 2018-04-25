@extends('admin.layout.master')

@section('title', 'Sản phẩm')
@section('content')
    
 <div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Danh sách sản phẩm</h3>
	</div>
	<div class="col-md-4">
        <button style="float: right;" class="btn btn-default"><i class="fa fa-plus-square"></i> Create</button>
	</div>
</div>
                    <!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-body table-reponsible">
									<table class="table table-hover" style="table-layout: fixed; width: 100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Tên sản phẩm</th>
												<th>Hình ảnh</th>
												<th>Nhóm</th>
												<th>Thời điểm cập nhật</th>
											</tr>
										</thead>
										<tbody>
											@foreach($products as $product)
											<tr>
												<td>{{ $product->id }}</td>
												<td>{{ $product->name }}</td>
												<td><img style="max-height: 100px; max-width: auto" src="{{ asset($product->image) }}" alt="{{ $product->name }}"></td>
												<td>{{ $product->hasSubCategory->name }}</td>
												<td>
													{{ Carbon\Carbon::parse($product->updated_at)->format('h:i A . d-m-Y') }}
												</td>
											</tr>
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
