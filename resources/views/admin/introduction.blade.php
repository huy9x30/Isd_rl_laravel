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
									{!! $introduction->content !!}
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
