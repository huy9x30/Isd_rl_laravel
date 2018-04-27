@extends('admin.layout.master')

@section('title', 'Chỉnh sửa - Thông tin liên hệ')
@section('content')
<div class="row">
	<div class="col-md-8">
    	<h3 class="page-title">Thay đổi thông tin liên hệ</h3>
	</div>
</div>
	@if (session('success'))
	    <div class="alert alert-success">
	        {{ session('success') }}
	        <a href="{{ route('admin.contacts.index') }}" class="btn btn-default"> Đi tới danh sách?</a>
	    </div>
	@endif
	@if (session('error'))
	    <div class="alert alert-danger">
	        {{ session('error') }}
	    </div>
	@endif
	<div class="panel">
								<div class="panel-body">
									<form method="post" action="{{ route('admin.contacts.update', ['contactId' => $contact->id]) }}" enctype="multipart/form-data">
										@method('PUT')
										@csrf
										<div class="form-group">
											<label for="contactName">Tên chủ thể *</label>
											<input id="contactName" class="form-control" name="name" value="{{ $contact->name }}"  type="text" required>
											@if($errors->has('name'))
					                            <p style="color:red">{{$errors->first('name')}}</p>
					                        @endif
										</div>
										@if($contact->id == 1) 
										<div class="form-group">
											<label for="personalPhone">Điện thoại riêng *</label>
											<input id="personalPhone" class="form-control" name="personalPhone" value="{{ $contact->personalPhone }}"  type="text" required>
											@if($errors->has('personalPhone'))
					                            <p style="color:red">{{$errors->first('personalPhone')}}</p>
					                        @endif
										</div>
										@endif
										<div class="form-group">
											<label for="workplacePhone">Điện thoại cơ quan *</label>
											<input id="workplacePhone" class="form-control" name="workplacePhone" value="{{ $contact->workplacePhone }}"  type="text" required>
											@if($errors->has('workplacePhone'))
					                            <p style="color:red">{{$errors->first('workplacePhone')}}</p>
					                        @endif
										</div>
										<div class="form-group">
											<label for="email">Email *</label>
											<input id="email" class="form-control" name="email" value="{{ $contact->email }}"  type="email" required>
											@if($errors->has('email'))
					                            <p style="color:red">{{$errors->first('email')}}</p>
					                        @endif
										</div>
										<div class="form-group">
											<label for="fax">Fax *</label>
											<input id="fax" class="form-control" name="fax" value="{{ $contact->fax }}"  type="text" required>
											@if($errors->has('fax'))
					                            <p style="color:red">{{$errors->first('fax')}}</p>
					                        @endif
										</div>
										<div class="form-group">
											<label for="address">Địa chỉ *</label>
											<input id="address" class="form-control" name="address" value="{{ $contact->address }}"  type="text" required>
											@if($errors->has('address'))
					                            <p style="color:red">{{$errors->first('address')}}</p>
					                        @endif
										</div>
										@if($contact->id == 2)
										<div class="form-group">
											<label for="website">Website *</label>
											<input id="website" class="form-control" name="website" value="{{ $contact->website }}"  type="text" required>
											@if($errors->has('website'))
					                            <p style="color:red">{{$errors->first('website')}}</p>
					                        @endif
										</div>
										<div class="form-group">
											<label for="introductionMessage">Lời giới thiệu *</label>
											<input id="introductionMessage" class="form-control" name="introductionMessage" value="{{ $contact->introductionMessage }}"  type="text" required>
											@if($errors->has('introductionMessage'))
					                            <p style="color:red">{{$errors->first('introductionMessage')}}</p>
					                        @endif
										</div>
										<div class="form-group">
											<label for="image">Bản đồ</label><br>
											<img src="{{ asset($contact->image) }}" alt="Bản đồ" style="max-height: 600px; max-width: 600px">
											<input type="file" id="image" name="image">
										</div>
										@else
										<div class="form-group">
											<label for="image">Ảnh đại diện</label><br>
											<img src="{{ asset($contact->image) }}" alt="Ảnh đại diện">
											<input type="file" id="image" name="image">
										</div>
										@endif
										<br>
										<button class="btn btn-primary" type="submit">
											Cập nhật
										</button>
									</form>
								</div>
							</div>
							<!-- END INPUT GROUPS -->
							@endsection
