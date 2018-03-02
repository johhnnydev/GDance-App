@extends('layouts.app')

@section('content')
	<h1>ORGANIZATIONAL AFFILIATIONS</h1>
	{!! Form::open(['id' => 'form', 'action' => ['OrgsController@update', $org->id], 'method' => 'POST']) !!}
	{{ csrf_field() }}
		<div style="margin-bottom: 10px;" class="form-row">
			<div class="col-md-3">
				{{Form::label('org_name', 'Name Of Organization', ['class' => 'col-form-label'])}}
				{{Form::text('org_name', $org->org_name, ['class' => 'form-control', 'placeholder' => 'Name of Organization', 'required'])}}				
			</div>
			<div class="col-md-3">
				{{Form::label('org_years', 'Inclusive Years', ['class' => 'col-form-label'])}}
				{{Form::text('org_years', $org->org_years, ['class' => 'form-control', 'placeholder' => 'Inclusive Years', 'required'])}}
			</div>
			<div class="col-md-3">
				{{Form::label('org_based', 'School-/Community-Based', ['class' => 'col-form-label'])}}
				{{Form::select('org_based', ['Community-Based' => 'Community-Based', 'School-Based' => 'School-Based'], $org->org_based, ['class' => 'form-control', 'placeholder' => 'Community | School', 'required'])}}
			</div>
			<div class="col-md-3">
				{{Form::label('org_position', 'Position/s Held', ['class' => 'col-form-label'])}}
				{{Form::text('org_position', $org->org_position, ['class' => 'form-control', 'placeholder' => 'Position/s Held', 'required'])}}
			</div>
		</div>
	{{-- hack and simulate don't remove --}}
    {{Form::hidden('_method', 'PUT')}}
	<a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}        
	{!! Form::close() !!}
@endsection

