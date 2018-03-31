@extends('layouts/master')
@section('title', 'Internal Server Error')
@section('content')
<div id="contentsection_right" style="margin-left:45px; width:740px">
        	<div style=" height:26px; border-bottom-color:#CCCCCC; border-bottom-style:solid; border-bottom-width:1px; color: #111; font-size:17px; font-weight:700"></div>
         <div style=" height: auto; margin-top:25px; font-size:13px; color:#333; text-align: left; margin-left: 10%">
	<h2>{{ $exception->getMessage() }}</h2>
</div>
</div>
@endsection
