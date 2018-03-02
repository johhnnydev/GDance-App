@extends('layouts.app')

@section('content')
	<h1>Scholastic Records</h1>
	{!! Form::open(['id' => 'form', 'action' => 'SchoolRecordController@store', 'method' => 'POST']) !!}
		{{ csrf_field() }}

		<div class="col-md-2"><h3>Elementary</h3></div>
		<div class="form-group row">
			<div class="col-md-2">
				{{Form::label('school_elem', 'School Attended', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">
				{{Form::text('school_elem', '', ['class' => 'form-control', 'placeholder' => 'Elementary School', 'required'])}}
				<small class="text-danger">{{ $errors->first('school_elem') }}</small>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-md-2">
				{{Form::label('school_elem_years', 'Inclusive Years', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">
				{{Form::text('school_elem_years', '', ['class' => 'form-control', 'placeholder' => '2010-2017', 'required'])}}
				<small class="text-danger">{{ $errors->first('school_elem_years') }}</small>
			</div>			
		</div>

		<div class="col-md-2"><h3>Junior High</h3></div>
		<div class="form-group row">
			<div class="col-md-2">
				{{Form::label('school_junior', 'School Attended', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">
				{{Form::text('school_junior', '', ['class' => 'form-control', 'placeholder' => 'Junior High School'])}}
				<small class="text-danger">{{ $errors->first('school_junior') }}</small>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2">				
				{{Form::label('school_junior_years', 'Inclusive Years', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">				
				{{Form::text('school_junior_years', '', ['class' => 'form-control', 'placeholder' => '2010-2017'])}}
				<small class="text-danger">{{ $errors->first('school_junior_years') }}</small>
			</div>
		</div>

		<div class="col-md-2"><h3>Senior High</h3></div>
		<div class="form-group row">
			<div class="col-md-2">				
				{{Form::label('school_senior', 'School Attended', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">				
				{{Form::text('school_senior', '', ['class' => 'form-control', 'placeholder' => 'Senior High School','required'])}}
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2">								
				{{Form::label('school_senior_years', 'Inclusive Years', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">								
				{{Form::text('school_senior_years', '', ['class' => 'form-control', 'placeholder' => '2010-2017'])}}
			</div>
		</div>	

		<div class="row">
			<div class="col-md-2"><h3 class="pull-right">College</h3></div>
		</div>
		<div class="form-group row">
			<div class="col-md-2">				
				{{Form::label('school_college', 'School Attended', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">				
				{{Form::text('school_college', '', ['class' => 'form-control', 'placeholder' => 'College'])}}
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2">								
				{{Form::label('school_college_years', 'Inclusive Years', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">								
				{{Form::text('school_college_years', '', ['class' => 'form-control', 'placeholder' => '2010-2017'])}}
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2">									
				{{Form::label('school_college_course', 'Course', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">											
				{{Form::text('school_college_course', '', ['class' => 'form-control', 'placeholder' => 'B.S. Accounting'])}}
			</div>
		</div>
		<div class="col-md-2"><h3 style="text-align: right;">Misc. Information</h3></div>
		<div class="form-group row">
			<div class="col-md-2">				
				{{Form::label('easy_subjects', 'Easiest Subject/s', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">				
				{{Form::text('easy_subjects', '', ['class' => 'form-control', 'placeholder' => 'Easiest Subject/s Handled'])}}
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2">								
				{{Form::label('difficult_subjects', 'Difficult Subject/s', ['class' => 'pull-right col-form-label'])}}
			</div>
			<div class="col-md-10">				
				{{Form::text('difficult_subjects', '', ['class' => 'form-control', 'placeholder' => 'Difficult Subject/s Handled'])}}
			</div>
		</div>		

		<a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
		{{Form::submit('Save', ['class' => 'btn btn-primary'])}} 
	{!! Form::close() !!}
@endsection
	