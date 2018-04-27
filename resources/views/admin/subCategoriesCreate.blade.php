@extends('admin.layout.master')

@section('title', 'Tạo mới - Nhóm sản phẩm phụ')
@section('content')
<div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Tạo nhóm sản phẩm phụ</h3>
	</div>
</div>
	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	        <a href="{{ route('admin.subCategories.index') }}" class="btn btn-default"> Đi tới danh sách?</a>
	    </div>
	@endif
	@if (session('error'))
	    <div class="alert alert-danger">
	        {{ session('error') }}
	    </div>
	@endif
	<div class="panel">
								<div class="panel-body">
									<form method="post" action="{{ route('admin.subCategories.store') }}"  >
										@csrf
										<div class="form-group">
											<label for="categoryId">Nhóm sản phẩm chính *
											<select name="categoryId" id="categoryId" class="form-control">
												@foreach($categories as $category)
												<option value="{{ $category->id }}">{{ $category->name }}</option>
												@endforeach
											</select>
											</label>
										</div>
										<div class="form-group">
											<label for="subCategoryName">Tên nhóm sản phẩm phụ *</label>
											<input id="subCategoryName" class="form-control" name="name" placeholder="Tên nhóm sản phẩm phụ" type="text" required>
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
