@extends('layouts.app')
@section('content')
	@if(session()->has('message'))
	    <div class="alert alert-success">
	        {{ session()->get('message') }}
	    </div>
	@endif
		{{-- Pending Requests --}}
		<div class="appshim">
			<div class="card border-warning card-shadow">
				<table class="table table-hover">
					<thead>
						<tr>
							<td colspan="5"><h3 class="text-warning">Pending</h3></td>
						</tr>
						<tr>
							<td><b>Agenda</b></td>
							<td><b>Date</b></td>
							<td><b>Time</b></td>
							<td><b>Status</b></td>					
							<td><b>User</b></td>
							<td></td>						
						</tr>
					</thead>
					<tbody>
						@foreach($appointments as $appointment)
							@if($appointment->status == 'Pending')
								<tr>
									<td>{{$appointment->agenda}}</td>
									<td>{{$appointment->date}}</td>
									<td>{{ date('g:i a', strtotime($appointment->time)) }}</td>
									<td>{{$appointment->status}}</td>
									<td>{{ucwords($appointment->user_id)}}</td>
									<td><a class="btn btn-warning btn-sm pull-right" href="appointments/{{ $appointment->id }}/edit">change status</a></td>
								</tr>
							@else
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
		{{-- Accepted request --}}
		<div class="appshim">
			<div class="card border-success card-shadow">				
			<table class="table table-hover">
				<thead>
					<tr>
						<td colspan="5"><h3 class="text-success">Accepted</h3></td>
					</tr>
					<tr>					
						<td><b>Agenda</b></td>
						<td><b>Date</b></td>
						<td><b>Time</b></td>
						<td><b>Status</b></td>						
						<td><b>User</b></td>	
						<td></td>					
					</tr>
				</thead>
				<tbody>
					@foreach($appointments as $appointment)
						@if($appointment->status == 'Accepted')
							<tr>
								<td>{{$appointment->agenda}}</td>
								<td>{{$appointment->date}}</td>
								<td>{{ date('g:i a', strtotime($appointment->time)) }}</td>
								<td>{{$appointment->status}}</td>
								<td>{{ucwords($appointment->user_id)}}</td>
								<td><a class="btn btn-success btn-sm pull-right" href="appointments/{{ $appointment->id }}/edit">change status</a></td>
							</tr>
						@else
						@endif
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		
		{{-- rescheduled --}}
		<div class="appshim">
			<div class="card border-info card-shadow">
				<table class="table table-hover">
					<thead>
						<tr>
							<td colspan="5"><h3 class="text-info">Rescheduled</h3></td>
						</tr>
						<tr>
							<td><b>Agenda</b></td>
							<td><b>Date</b></td>
							<td><b>Time</b></td>
							<td><b>Status</b></td>						
							<td><b>User</b></td>	
							<td></td>					
						</tr>
					</thead>
					<tbody>
						@foreach($appointments as $appointment)
							@if($appointment->status == 'Rescheduled')
								<tr>
									<td>{{$appointment->agenda}}</td>
									<td>{{$appointment->date}}</td>
									<td>{{ date('g:i a', strtotime($appointment->time)) }}</td>
									<td>{{$appointment->status}}</td>
									<td>{{ucwords($appointment->user_id)}}</td>
									<td><a class="btn btn-info btn-sm pull-right" href="appointments/{{ $appointment->id }}/edit">change status</a></td>
								</tr>
							@else
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
@endsection