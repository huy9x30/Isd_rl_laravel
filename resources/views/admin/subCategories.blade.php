@extends('admin.layout.master')

@section('title', 'Nhóm sản phẩm phụ')
@section('content')
    
<div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Danh sách nhóm sản phẩm phụ</h3>
	</div>
	<div class="col-md-4">
        <button style="float: right;" class="btn btn-default"><i class="fa fa-plus-square"></i> Create</button>
	</div>
</div>
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