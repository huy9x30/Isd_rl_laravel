@extends('admin.layout.master')

@section('title', 'Chỉnh sửa - Nhóm sản phẩm phụ')
@section('content')
<div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Thay đổi thông tin nhóm phụ</h3>
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
									<form method="post" action="{{ route('admin.subCategories.update', ['subCategoryId' => $subCategory->id]) }}">
										@method('PUT')
										@csrf
										<div class="form-group">
													<label for="currentCategory">Nhóm sản phẩm chính</label>
											<div class="row">
												<div class="col-md-6"><input id="currentCategory" style="text-align: center" type="text" disabled="" value="{{ $subCategory->hasCategory->name }}"></div><br>
												<div class="col-md-6">
													<label for="categoryId">Thay đổi thành</label>
													<select name="categoryId" id="categoryId" class="form-control">
														@foreach($categories as $category)
																<option value="{{ $category->id }}">{{ $category->name }}</option>
														@endforeach
													</select>
												</div>
											</div>
													
													<hr>
										</div>
										<div class="form-group">
											<label for="subCategoryName">Tên nhóm sản phẩm phụ</label>
											<input id="subCategoryName" class="form-control" name="name" value="{{ $subCategory->name }}" placeholder="Tên nhóm sản phẩm phụ" type="text" required>
											@if($errors->has('name'))
					                            <p style="color:red">{{$errors->first('name')}}</p>
					                        @endif
										</div>
										<br>
										<button class="btn btn-primary" type="submit">
											Cập nhật
										</button>
									</form>
								</div>
							</div>
							<!-- END INPUT GROUPS -->
							@endsection
