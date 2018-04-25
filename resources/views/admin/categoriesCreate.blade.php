@extends('admin.layout.master')

@section('title', 'Nhóm sản phẩm chính')
@section('content')
<div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Tạo nhóm sản phẩm chính</h3>
	</div>
</div>
	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	        <a href="{{ route('admin.showCategories') }}" class="btn btn-default"> Đi tới danh sách?</a>
	    </div>
	@endif
	@if (session('error'))
	    <div class="alert alert-danger">
	        {{ session('error') }}
	    </div>
	@endif
	<div class="panel">
								<div class="panel-body">
									<form method="post" action="{{ route('admin.createCategory') }}"  style="text-align: center;">
										@csrf
										<div class="form-group">
											<input class="form-control" name="name" placeholder="Tên nhóm sản phẩm chính" type="text">
											@if($errors->has('name'))
					                            <p style="color:red">{{$errors->first('name')}}</p>
					                        @endif
										</div>
										<br>
										<button class="btn btn-primary" type="submit">
											Tạo mới
										</button>
									</form>
								</div>
							</div>
							<!-- END INPUT GROUPS -->
							@endsection
