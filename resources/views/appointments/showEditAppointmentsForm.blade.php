@extends('layouts.app')
@section('content')
<h1>Edit an appointment</h1>
{!! Form::open(['id' => 'form', 'action' => ['AppointmentsController@update', $appointment->id], 'method' => 'POST']) !!}
	{{ csrf_field() }}

    <div style="margin-bottom: 10px;" class="form-row">
        <div class="col-md-3{{ $errors->has('agenda') ? ' has-error' : '' }}">
            {{Form::label('agenda', 'Agenda', ['class' => 'col-form-label'])}}
            {{Form::text('agenda', $appointment->agenda, ['disabled', 'class' => 'form-control'])}}
            <small class="text-danger">{{ $errors->first('agenda') }}</small>
        </div>
        <div class="col-md-3{{ $errors->has('date') ? ' has-error' : '' }}">
            {{Form::label('date', 'Date', ['class' => 'col-form-label'])}}
            {{Form::date('date', $appointment->date, ['class' => 'form-control', 'placeholder' => ''])}}
            <small class="text-danger">{{ $errors->first('date') }}</small>  
        </div>
        <div class="col-md-3{{ $errors->has('time') ? ' has-error' : '' }}">
            {{Form::label('time', 'Time', ['class' => 'col-form-label'])}}
            {{Form::time('time', $appointment->time, ['class' => 'form-control', 'placeholder' => ''])}}
            <small class="text-danger">{{ $errors->first('time') }}</small>  
        </div>
        <div class="col-md-3{{ $errors->has('status') ? ' has-error' : '' }}">
            {{Form::label('status', 'Status', ['class' => 'col-form-label'])}}
            {{Form::select('status', ['Pending' => 'Pending', 'Accepted' => 'Accepted', 'Rescheduled' => 'Rescheduled'], $appointment->status, ['class' => 'form-control', 'placeholder' => 'Status'])}}
            <small class="text-danger">{{ $errors->first('status') }}</small>
        </div>
    </div>
    
    <a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}  
    {{-- hack and simulate don't remove--}}
    {{Form::hidden('_method', 'PUT')}}      
{!! Form::close() !!}
@endsection


