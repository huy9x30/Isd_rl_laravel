@extends('admin.layout.master')

@section('title', 'Phản hồi')
@section('content')
    <h3 class="page-title">Phản hồi</h3>
                    <!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-body table-reponsible">
									<table class="table table-hover" style="table-layout: fixed; width: 100%">
										<thead>
											<tr>
												<th>@sortablelink('id','Mã số')</th>
												<th>@sortablelink('title','Tiêu đề')</th>
												<th>Nội dung</th>
												<th>@sortablelink('updated_at','Thời gian ghi nhận')</th>
											</tr>
										</thead>
										<tbody>
											@foreach($feedbacks as $feedback)
											<tr>
												<td>{{ $feedback->id }}</td>
												<td>{{ $feedback->title }}</td>
												<td style="word-wrap: break-word">{{ $feedback->content }}</td>
												<td>
													{{ Carbon\Carbon::parse($feedback->created_at)->format('h:i A . d-m-Y') }}
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									<div style="text-align: center">
										{!! $feedbacks->appends(\Request::except('page'))->render() !!}
									</div>
								</div>
							</div>
							<!-- END TABLE HOVER -->
@endsection
