@extends('layouts.app')

@section('content')
		<h1>ABOUT THE STUDENT</h1>
		{!! Form::open(['id' => 'form', 'action' => 'AboutController@store', 'method' => 'POST']) !!}
		{{ csrf_field() }}
			<div class="form-row">
				<div class="col-md-12">
					{{Form::label('interest_hobbies', 'Interests and Hobbies', ['class' => 'col-form-label'])}}
					{{Form::text('interest_hobbies', '', ['class' => 'form-control', 'placeholder' => 'Interest and Hobbies', 'required'])}}
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12">
					{{Form::label('skills_talents', 'Skills and Talents', ['class' => 'col-form-label'])}}
					{{Form::text('skills_talents', '', ['class' => 'form-control', 'placeholder' => 'Skills and Talents', 'required'])}}
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12">
					{{Form::label('attributes_attitudes', 'Attributes and Attitudes', ['class' => 'col-form-label'])}}
					{{Form::text('attributes_attitudes', '', ['class' => 'form-control', 'placeholder' => 'Attributes and Attitudes', 'required'])}}
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12">
					{{Form::label('goals_ambitions', 'Goals and Ambitions in Life', ['class' => 'col-form-label'])}}
					{{Form::text('goals_ambitions', '', ['class' => 'form-control', 'placeholder' => 'Goals and Ambitions', 'required'])}}
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12">
					{{Form::label('assets_strengths', 'Assets and Strengths', ['class' => 'col-form-label'])}}
					{{Form::text('assets_strengths', '', ['class' => 'form-control', 'placeholder' => 'Assets and Strengths', 'required'])}}
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12">
					{{Form::label('liabilities_weaknesses', 'Liabilities and Weaknesses', ['class' => 'col-form-label'])}}
					{{Form::text('liabilities_weaknesses', '', ['class' => 'form-control', 'placeholder' => 'Liabilities and Weaknesses', 'required'])}}
				</div>
			</div>
			<div style="margin-bottom: 10px;" class="form-row">
				<div class="col-md-12">
					{{Form::label('present_concerns', 'Present Concerns', ['class' => 'col-form-label'])}}
					{{Form::text('present_concerns', '', ['class' => 'form-control', 'placeholder' => 'Present Concerns', 'required'])}}
				</div>
			</div>

			<a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}        
		{!! Form::close() !!}
@endsection