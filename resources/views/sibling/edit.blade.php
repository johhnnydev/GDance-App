@extends('layouts.app')

@section('content')
{!! Form::open(['id' => 'form', 'action' => ['SiblingController@update', $sibling->id], 'method' => 'POST']) !!}
	{{ csrf_field() }}
	<h1>Add a Sibling</h1>

	<div style="margin-bottom: 10px;" class="form-row">
		<div class="col-md-4{{ $errors->has('name') ? ' has-error' : '' }}">
			{{Form::label('name', 'Name Of Sibling', ['class' => 'col-form-label'])}}
			{{Form::text('name', $sibling->name, ['class' => 'form-control', 'placeholder' => 'Full Name', 'required'])}}
			<small class="text-danger">{{ $errors->first('name') }}</small>
		</div>
		<div class="col-md-4{{ $errors->has('school_place_work') ? ' has-error' : '' }}">
			{{Form::label('school_place_work', 'School/Place Of Work', ['class' => 'col-form-label'])}}
			{{Form::text('school_place_work', $sibling->school_place_work, ['class' => 'form-control', 'placeholder' => 'AMA Fairview', 'required'])}}
			<small class="text-danger">{{ $errors->first('school_place_work') }}</small>
		</div>
		<div class="col-md-4{{ $errors->has('birthday') ? ' has-error' : '' }}">
			{{Form::label('birthday', 'Birthday', ['class' => 'col-form-label'])}}
	    	{{Form::date('birthday', $sibling->birthday, ['class' => 'form-control', 'placeholder' => '', 'required'])}}
	    	<small class="text-danger">{{ $errors->first('birthday') }}</small>
		</div>
	</div>

    {{Form::hidden('_method', 'PUT')}}
    <a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection