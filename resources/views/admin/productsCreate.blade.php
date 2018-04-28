@extends('admin.layout.master')

@section('title', 'Tạo mới - Sản phẩm')
@section('content')
    	<h3 class="page-title">Tạo sản phẩm</h3>
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
									<form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="subCategoryId">Nhóm sản phẩm chính *
											@if($errors->has('subCategoryId'))
					                            <p style="color:red">{{$errors->first('name')}}</p>
					                        @endif
											<select name="subCategoryId" id="subCategoryId" class="form-control">
												@foreach($subCategories as $subCategory)
												<option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
												@endforeach
											</select>
											</label>
										</div>
										<div class="form-group">
											<label for="productName">Tên sản phẩm *</label>
											<input  name="name" id="productName" class="form-control" placeholder="Tên sản phẩm" type="text" required>
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
											@if($errors->has('description'))
						                            <p style="color:red">{{$errors->first('description')}}</p>
						                        @endif
											<label for="description">Mô tả sản phẩm *</label>
											<textarea name="description" id="description"></textarea>
											<script>
										        ClassicEditor
										        .create( document.querySelector( '#description' ) )
										        .catch( error => {
										            console.error( error );
										        });
										    </script>
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
