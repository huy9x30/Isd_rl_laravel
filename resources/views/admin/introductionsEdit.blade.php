@extends('admin.layout.master')

@section('title', 'Giới thiệu')
@section('content')
    <h3 class="page-title">Cập nhật thông tin giới thiệu</h3>
	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	        <a href="{{ route('admin.introductions.index') }}" class="btn btn-default"> Đi tới trang review?</a>
	    </div>
	@endif
	@if (session('error'))
	    <div class="alert alert-danger">
	        {{ session('error') }}
	    </div>
	@endif
	<div class="panel">

                    <!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-body">
									<form method="post" action="{{ route('admin.introductions.update', ['id' => $introduction->id]) }}" enctype="multipart/form-data">
										@method('PUT')
										@csrf
										<div class="form-group">
											<label for="image">Hình ảnh</label>
											<input type="file" name="image">
										</div>
										<div class="form-group">
											<label for="intro">Giới thiệu</label>
											@if($errors->has('content'))
						                            <p style="color:red">{{$errors->first('content')}}</p>
						                        @endif
											<textarea name="content" id="intro">{{ $introduction->content }}</textarea>
											<script>
										        ClassicEditor
										        .create( document.querySelector( '#intro' ) )
										        .catch( error => {
										            console.error( error );
										        } );
										    </script>
										    
										</div>
										<button class="btn btn-primary">Cập nhật</button>
									</form>
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
