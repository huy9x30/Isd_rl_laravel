@extends('admin.layout.master')

@section('title', 'Nhóm sản phẩm phụ')
@section('content')
    
<div class="row">
	<div class="col-md-8" style="margin-bottom: 10px">
    	<h3 class="page-title">Danh sách nhóm sản phẩm phụ</h3>
	</div>
	<div class="col-md-4">
        <button style="float: right;" class="btn btn-default"><i class="fa fa-plus-square"></i> Tạo mới</button>
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
							<div class="panel"><!-- 
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
								</div> -->
								<div class="panel-body table-reponsible">
									<table class="table table-hover" style="table-layout: fixed; width: 100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Tên nhóm phụ</th>
												<th>Thời điểm cập nhật</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($subCategories as $subCategory)
											<tr>
												<td>{{ $subCategory->id }}</td>
												<td>{{ $subCategory->name }}</td>
												<td>
													{{ Carbon\Carbon::parse($subCategory->updated_at)->format('h:i A . d-m-Y') }}
												</td>
												<td style="text-align: center;">
													@if($sub_category->id >= 1 && $sub_category->id <= 11)
														
													@else
														<a data-toggle="modal" data-target="#delete-{{ $category->id }}"><i class="fa fa-trash"></i></a>
													@endif
												</td>
											</tr>
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
