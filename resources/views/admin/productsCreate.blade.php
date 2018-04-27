@extends('admin.layout.master')

@section('title', 'Tạo mới - Sản phẩm')
@section('content')
<div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Tạo sản phẩm</h3>
	</div>
</div>
	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	        <a href="{{ route('admin.products.index') }}" class="btn btn-default"> Đi tới danh sách?</a>
	    </div>
	@endif
	@if (session('error'))
	    <div class="alert alert-danger">
	        {{ session('error') }}
	    </div>
	@endif
	<div class="panel">
								<div class="panel-body">
									<form method="post" action="{{ route('admin.products.store') }}"  enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="subCategoryId">Nhóm sản phẩm chính *
											<select name="subCategoryId" id="subCategoryId" class="form-control">
												@foreach($subCategories as $subCategory)
												<option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
												@endforeach
											</select>
											</label>
										</div>
										<div class="form-group">
											<label for="productName">Tên sản phẩm *</label>
											<input id="productName" class="form-control" name="name" placeholder="Tên sản phẩm" type="text" required>
											@if($errors->has('name'))
					                            <p style="color:red">{{$errors->first('name')}}</p>
					                        @endif
										</div>
										<div class="form-group">
											<label for="imageUpload">Hình ảnh *</label>
											<input name="image" type="file" required>
											@if($errors->has('image'))
						                            <p style="color:red">{{$errors->first('image')}}</p>
						                        @endif
										</div>
										<div class="form-group">
											<label for="description">Mô tả sản phẩm</label>
											<textarea name="description" id="description"></textarea>
											<script>
										        ClassicEditor
										        .create( document.querySelector( '#description' ) )
										        .catch( error => {
										            console.error( error );
										        } );
										    </script>
										    @if($errors->has('description'))
						                            <p style="color:red">{{$errors->first('description')}}</p>
						                        @endif
										</div>
										<br>
										<button class="btn btn-primary" type="submit">
											Tạo mới
										</button>
									</form>
								</div>
							</div>
							<!-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> -->
    
							<!-- END INPUT GROUPS -->
							@endsection
