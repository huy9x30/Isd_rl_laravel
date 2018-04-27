@extends('admin.layout.master')

@section('title', 'Giới thiệu')
@section('content')
<div class="row">
<div class="col-md-8">
    	<h3 class="page-title">Thông tin giới thiệu</h3> 	
	</div>
	<div class="col-md-4">
        <a style="float: right;" class="btn btn-primary" href="{{ route('admin.introductions.edit', ['id' => $introduction->id]) }}"><i class="fa fa-plus-square"></i> Cập nhật</a>
	</div>
</div>

                    <!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-body">
									<img src="{{ $introduction->image }}" alt="Hình ảnh giới thiệu">
									{!! $introduction->content !!}
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
