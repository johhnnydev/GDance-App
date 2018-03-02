@extends('layouts.app')
@section('content')
	<h1>Request an appointment</h1>
	{!! Form::open(['id' => 'form', 'action' => 'AppointmentsController@store', 'method' => 'POST']) !!}
	{{ csrf_field() }}
    	<div style="margin-bottom: 10px;" class="form-row">
            <div class="col-md-4">
                {{Form::label('agenda', 'Agenda', ['class' => 'col-form-label'])}}
                {{Form::text('agenda', '', ['class' => 'form-control', 'placeholder' => 'Reason or Agenda', 'required'])}}
                <small class="text-danger">{{ $errors->first('agenda') }}</small>
            </div>
            <div class="col-md-4">
                {{Form::label('date', 'Date', ['class' => 'col-form-label'])}}
                {{Form::date('date', '', ['class' => 'form-control', 'placeholder' => '', 'required'])}}
                <small class="text-danger">{{ $errors->first('date') }}</small>  
            </div>
            <div class="col-md-4">
                {{Form::label('time', 'Time', ['class' => 'col-form-label'])}}
                {{Form::time('time', '', ['class' => 'form-control', 'placeholder' => '', 'required'])}}
                <small class="text-danger">{{ $errors->first('time') }}</small>  
            </div>
        </div>
    <a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
</div>
@endsection