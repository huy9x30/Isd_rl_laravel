@extends('admin.layout.master')

@section('title', 'Thông tin liên hệ')
@section('content')
    	<h3 class="page-title">Danh sách thông tin liên hệ</h3>
                    <!-- TABLE HOVER -->
							<div class="panel">
								
								<div class="panel-body table-reponsible">
									<table class="table table-hover" style="table-layout: fixed; width: 100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Tên chủ thể</th>
												<th>Thời điểm cập nhật</th>
											</tr>
										</thead>
										<tbody>
											@foreach($contacts as $contact)
											<tr>
												<td>{{ $contact->id }}</td>
												<td>
													<a href="{{ route('admin.contacts.edit', ['id' => $contact->id]) }}">
														{{ $contact->name }}
													</a>
												</td>
												<td>
													{{ Carbon\Carbon::parse($contact->updated_at)->format('h:i A . d-m-Y') }}
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
