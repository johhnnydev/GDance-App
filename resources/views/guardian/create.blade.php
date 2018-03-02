@extends('layouts.app')

@section('content')
	{!! Form::open(['id' => 'form', 'action' => 'GuardianController@store', 'method' => 'POST']) !!}
    {{ csrf_field() }}
    <h1>Guardian Information</h1>

	<div class="form-row">
	    <div class="col-md-3{{ $errors->has('guardian_fname') ? ' has-error' : '' }}">
	        {{Form::label('guardian_fname', 'First Name', ['class' => 'col-form-label'])}}
	        {{Form::text('guardian_fname', '', ['class' => 'form-control', 'placeholder' => 'First Name', 'required'])}}
	        <small class="text-danger">{{ $errors->first('guardian_fname') }}</small>
	    </div>
	    <div class="col-md-3{{ $errors->has('guardian_mname') ? ' has-error' : ''}} ">
	        {{Form::label('guardian_mname', 'Middle Name', ['class' => 'col-form-label'])}}
	        {{Form::text('guardian_mname', '', ['class' => 'form-control', 'placeholder' => 'Middle Name', 'required'])}}
	        <small class="text-danger">{{ $errors->first('guardian_mname') }}</small>
	    </div>
	    <div class="col-md-3{{ $errors->has('guardian_lname') ? ' has-error' : ''}} ">
	        {{Form::label('guardian_lname', 'Last Name', ['class' => 'col-form-label'])}}
	        {{Form::text('guardian_lname', '', ['class' => 'form-control', 'placeholder' => 'Last Name', 'required'])}}
	        <small class="text-danger">{{ $errors->first('guardian_lname') }}</small>
	    </div>
	    <div class="col-md-3{{ $errors->has('guardian_suffix') ? ' has-error' : ''}} ">
	        {{Form::label('guardian_suffix', 'Suffix', ['class' => 'col-form-label'])}}
	        {{Form::text('guardian_suffix', '', ['class' => 'form-control', 'placeholder' => 'ex. jr'])}}
	        <small class="text-danger">{{ $errors->first('guardian_suffix') }}</small>
	    </div> 
	</div>

	<div class="form-row">
        <div class="col-md-12{{ $errors->has('guardian_address') ? ' has-error' : '' }}">
            {{Form::label('guardian_address', 'Present Address', ['class' => 'col-form-label'])}}
            {{Form::text('guardian_address', '', ['class' => 'form-control', 'placeholder' => 'Present Address', 'required'])}}
            <small class="text-danger">{{ $errors->first('guardian_address') }}</small>
        </div>            
    </div>
	
	<div class="form-row">	
		<div class="col-md-4{{ $errors->has('guardian_birthday') ? ' has-error' : '' }}">
		    {{Form::label('guardian_birthday', 'Birthday', ['class' => 'col-form-label'])}}
		    {{Form::date('guardian_birthday', '', ['class' => 'form-control', 'placeholder' => '', 'required'])}}
		    <small class="text-danger">{{ $errors->first('guardian_birthday') }}</small>  
		</div>
		<div class="col-md-4{{ $errors->has('guardian_age') ? ' has-error' : '' }}">
		    {{Form::label('guardian_age', 'Age', ['class' => 'col-form-label'])}}
		    {{Form::number('guardian_age', '', ['class' => 'form-control', 'placeholder' => 'Age', 'min' => '1', 'required'])}}
		    <small class="text-danger">{{ $errors->first('guardian_age') }}</small>
		</div>
		<div class="col-md-4{{ $errors->has('guardian_civil_status') ? ' has-error' : '' }}">
		    {{Form::label('guardian_civil_status', 'Civil Status', ['class' => 'col-form-label'])}}
		    {{Form::select('guardian_civil_status', ['Single' => 'Single', 'Married' => 'Married','Divorced' => 'Divorced','Separated' => '
		    Separated', 'Widowed' => 'Widowed'], null, ['class' => 'form-control', 'placeholder' => 'Civil Status', 'required'])}}
		    <small class="text-danger">{{ $errors->first('guardian_civil_status') }}</small>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-6{{ $errors->has('guardian_nationality') ? ' has-error' : '' }}">
			{{Form::label('guardian_nationality', 'Nationality', ['class' => 'col-form-label'])}}
			{{Form::text('guardian_nationality', '', ['class' => 'form-control', 'placeholder' => 'ex. Filipino'])}}
			<small class="text-danger">{{ $errors->first('guardian_nationality') }}</small>
		</div>
		<div class="col-md-6{{ $errors->has('guardian_religion') ? ' has-error' : '' }}">
			{{Form::label('guardian_religion', 'Religion', ['class' => 'col-form-label'])}}
			{{Form::text('guardian_religion', '', ['class' => 'form-control', 'placeholder' => 'ex. Roman Catholic'])}}
			<small class="text-danger">{{ $errors->first('guardian_religion') }}</small>
		</div>   
	</div>
	
	<div class="form-row">
		<div class="col-md-6{{ $errors->has('guardian_working_status') ? ' has-error' : '' }}">
	        {{Form::label('guardian_working_status', 'Working Status', ['class' => 'col-form-label'])}}
	        {{Form::select('guardian_working_status', ['Locally Employed' => 'Locally Employed', 'Abroad(OFW)' => 'Abroad (OFW)', 'Businessman/Home-Based' => 'Businessman/Home-Based', 'Not Working' => 'Not Working'], null, ['class' => 'form-control', 'placeholder' => 'Working Status', 'required'])}}
	        <small class="text-danger">{{ $errors->first('guardian_working_status') }}</small>
	    </div>
		<div class="col-md-6{{ $errors->has('guardian_occupation') ? ' has-error' : '' }}">
		    {{Form::label('guardian_occupation', 'Occupation', ['class' => 'col-form-label'])}}
		    {{Form::text('guardian_occupation', '', ['class' => 'form-control', 'placeholder' => 'Occupation', 'required'])}}
		    <small class="text-danger">{{ $errors->first('guardian_occupation') }}</small>
		</div>
	</div>
	<div class="form-row">		
		<div class="col-md-12{{ $errors->has('guardian_company_contact') ? ' has-error' : '' }}">
		    {{Form::label('guardian_company_contact', 'Company Address and Contact no.')}}
		    {{Form::text('guardian_company_contact', '', ['class' => 'form-control', 'placeholder' => 'Dunder Mifflin Scranton'])}}
		    <small class="text-danger">{{ $errors->first('company_contact') }}</small>
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-6{{ $errors->has('guardian_education') ? ' has-error' : '' }}">
		    {{Form::label('guardian_education', 'Highest Educational Attainment', ['class' => 'col-form-label'])}}
		    {{Form::text('guardian_education', '', ['class' => 'form-control', 'placeholder' => 'Highest Educational Degree'])}}
		    <small class="text-danger">{{ $errors->first('guardian_education') }}</small>
		</div> 
		<div class="col-md-6{{ $errors->has('guardian_degree') ? ' has-error' : '' }}">
		    {{Form::label('guardian_degree', 'Degree', ['class' => 'col-form-label'])}}
		    {{Form::text('guardian_degree', '', ['class' => 'form-control', 'placeholder' => 'Degree'])
		    }}
		    <small class="text-danger">{{ $errors->first('guardian_degree') }}</small>
		</div> 
	</div>

	<div style="margin-bottom: 10px;" class="form-row">
		<div class="col-md-6{{ $errors->has('guardian_contact_number') ? ' has-error' : '' }}">
		    {{Form::label('guardian_contact_number', 'Contact Number')}}
		    {{Form::text('guardian_contact_number', '', ['class' => 'form-control', 'placeholder' => 'Contact Number'])}}
		    <small class="text-danger">{{ $errors->first('guardian_contact_number') }}</small>
		</div>
		<div class="col-md-6{{ $errors->has('guardian_email_address') ? ' has-error' : '' }}">
		    {{Form::label('guardian_email_address', 'Email Adress')}}
		    {{Form::email('guardian_email_address', '', ['class' => 'form-control', 'placeholder' => 'E-Mail Address'])}}
		    <small class="text-danger">{{ $errors->first('mother_email_address') }}</small>
		</div>
	</div>

	<a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection