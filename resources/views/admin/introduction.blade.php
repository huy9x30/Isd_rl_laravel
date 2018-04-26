@extends('admin.layout.master')

@section('title', 'Giới thiệu')
@section('content')
    <h3 class="page-title">Thông tin giới thiệu</h3>
                    <!-- TABLE HOVER -->
							<div class="panel"><!-- 
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
								</div> -->
								<div class="panel-body">
									<form method="post" action="{{ route('admin.createProduct') }}">
										<div class="form-group">
											<label for="intro">Giới thiệu</label>
											<textarea name="introduction" id="intro">{{ $introduction->content }}</textarea>
											<script>
										        ClassicEditor
										        .create( document.querySelector( '#intro' ) )
										        .catch( error => {
										            console.error( error );
										        } );
										    </script>
										    @if($errors->has('introduction'))
						                            <p style="color:red">{{$errors->first('introduction')}}</p>
						                        @endif
										</div>
										<button class="btn btn-primary">Cập nhật</button>
									</form>
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
