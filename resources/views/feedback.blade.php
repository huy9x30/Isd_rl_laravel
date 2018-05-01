@extends('layouts/master')
@section('title', 'PHẢN HỒI')
@section('content')
    <div id="contentsection_right" style="margin-left:45px; width:740px">
        	<div style=" height:26px; border-bottom-color:#CCCCCC; border-bottom-style:solid; border-bottom-width:1px; color: #111; font-size:17px; font-weight:700">Hãy cho chúng tôi biết cảm nhận của bạn</div>
         <div style=" height: auto; margin-top:25px; font-size:13px; color:#333; text-align: left; margin-left: 10%">
         	@if (session('success'))
			    <div style="color: green; font-size: 15px; text-align: center; margin: 20px">
			        {{ session('success') }}
			    </div>
			@endif
         	<form method="POST" action="{{ route('feedback.send') }}">
         		@CSRF
				<label style="align-self: flex-start; margin: 10px 0px" for="titleForm">Tiêu đề *</label><br>
				<input id="titleForm" type="text" name="title" value="{{ old('title') }}" style="width: 500px;"><br>
				@if($errors->has('title'))
                            <p style="color:red">{{$errors->first('title')}}</p>
                @endif
				<label style="align-self: flex-start; margin: 10px 0px" for="feedbackForm">Nội dung *</label><br>
				<textarea id="feedbackForm" name="content" cols="70" rows="5" style="border-color: gray; resize: none; width: 500px; margin: 10px 0px">{{ old('content') }}</textarea><br>
				@if($errors->has('content'))
                            <p style="color:red">{{$errors->first('content')}}</p>
                        @endif
				<button type="submit">Gửi</button>
			</form>

		</div>
	</div>
@endsection
