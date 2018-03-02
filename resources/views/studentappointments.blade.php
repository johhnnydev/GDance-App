@extends('layouts.app')
@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<h1>Your Appointments! <small><a href="/appointments/create">Set an appointment</a></small></h1>
	<div class="row">
		<div class="col-9">
			<table class="table table-hover">
			<thead class="thead">				
				<tr>
					<td><b>Agenda</td>
					<td><b>Date</b></td>
					<td><b>Time</b></td>
					<td><b>Status</b></td>
					<td></td>
				</tr>
			</thead>
				<tbody>
				@if(count($student_appointments) > 0)
					@foreach($student_appointments as $appointment)
						<tr>
							<td>{{ $appointment->agenda }}</td>
							<td>{{ $appointment->date }}</td>
							<td>{{ date('g:i a', strtotime($appointment->time)) }}</td>
							<td>{{ $appointment->status }}</td>
							<td>
								{!! Form::open(['id' => 'form', 'action' => ['AppointmentsController@destroy', $appointment->id], 'method' => 'POST']) !!}
									{{Form::hidden('_method', 'DELETE')}}
									{{Form::submit('Cancel', ['class' => 'cursor-h btn btn-danger btn-sm'])}}
								{!! Form::close() !!}
							</td>
						</tr>				
					@endforeach
				@else
					<tr><td style="text-align: center;" colspan="5">No Appointment yet</td></tr>
				@endif
				</tbody>
			</table>
		</div> <!-- column item -->
		<div class="col-3">
			<h4>Office Hours</h4>
			<ul>
				<li>8:00 AM to 10:00 AM</li>
				<li>10:20 AM to 12:00 PM</li>
				<li>1:00 PM to 3:00 PM</li>
				<li>3:20 PM to 5:00 PM</li>
			</ul>
		</div>
	</div> <!-- row -->
@endsection