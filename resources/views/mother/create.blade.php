@extends('layouts.app')

@section('content')
	{!! Form::open(['id' => 'form', 'action' => 'MotherController@store', 'method' => 'POST']) !!}
    {{ csrf_field() }}
    <h1>Mother Information</h1>

	<div class="form-row">
	    <div class="col-md-3{{ $errors->has('mother_fname') ? ' has-error' : '' }}">
	        {{Form::label('mother_fname', 'First Name', ['class' => 'col-form-label'])}}
	        {{Form::text('mother_fname', '', ['class' => 'form-control', 'placeholder' => 'First Name', 'required'])}}
	        <small class="text-danger">{{ $errors->first('mother_fname') }}</small>
	    </div>
	    <div class="col-md-3{{ $errors->has('mother_mname') ? ' has-error' : ''}} ">
	        {{Form::label('mother_mname', 'Middle Name', ['class' => 'col-form-label'])}}
	        {{Form::text('mother_mname', '', ['class' => 'form-control', 'placeholder' => 'Middle Name', 'required'])}}
	        <small class="text-danger">{{ $errors->first('mother_mname') }}</small>
	    </div>
	    <div class="col-md-3{{ $errors->has('mother_lname') ? ' has-error' : ''}} ">
	        {{Form::label('mother_lname', 'Last Name', ['class' => 'col-form-label'])}}
	        {{Form::text('mother_lname', '', ['class' => 'form-control', 'placeholder' => 'Last Name', 'required'])}}
	        <small class="text-danger">{{ $errors->first('mother_lname') }}</small>
	    </div>
	    <div class="col-md-3{{ $errors->has('mother_suffix') ? ' has-error' : ''}} ">
	        {{Form::label('mother_suffix', 'Suffix', ['class' => 'col-form-label'])}}
	        {{Form::text('mother_suffix', '', ['class' => 'form-control', 'placeholder' => 'Suffix'])}}
	        <small class="text-danger">{{ $errors->first('mother_suffix') }}</small>
	    </div> 
	</div>


	<div class="form-row">
        <div class="col-md-12{{ $errors->has('mother_address') ? ' has-error' : '' }}">
            {{Form::label('mother_address', 'Present Address', ['class' => 'col-form-label'])}}
            {{Form::text('mother_address', '', ['class' => 'form-control', 'placeholder' => 'Present Address', 'required'])}}
            <small class="text-danger">{{ $errors->first('mother_address') }}</small>
        </div>            
    </div>
	

	<div class="form-row">	
		<div class="col-md-4{{ $errors->has('mother_birthday') ? ' has-error' : '' }}">
		    {{Form::label('mother_birthday', 'Birthday', ['class' => 'col-form-label'])}}
		    {{Form::date('mother_birthday', '', ['class' => 'form-control', 'placeholder' => '', 'required'])}}
		    <small class="text-danger">{{ $errors->first('mother_birthday') }}</small>  
		</div>
		<div class="col-md-4{{ $errors->has('mother_age') ? ' has-error' : '' }}">
		    {{Form::label('mother_age', 'Age', ['class' => 'col-form-label'])}}
		    {{Form::number('mother_age', '', ['class' => 'form-control', 'placeholder' => 'Age', 'min' => '1'])}}
		    <small class="text-danger">{{ $errors->first('mother_age') }}</small>
		</div>
		<div class="col-md-4{{ $errors->has('mother_civil_status') ? ' has-error' : '' }}">
		    {{Form::label('mother_civil_status', 'Civil Status', ['class' => 'col-form-label'])}}
		    {{Form::select('mother_civil_status', ['Single' => 'Single', 'Married' => 'Married','Divorced' => 'Divorced','Separated' => '
		    Separated', 'Widowed' => 'Widowed'], null, ['class' => 'form-control', 'placeholder' => 'Civil Status', 'required'])}}
		    <small class="text-danger">{{ $errors->first('mother_civil_status') }}</small>
		</div>
	</div>
	<div class="form-row">		
		<div class="col-md-6{{ $errors->has('mother_nationality') ? ' has-error' : '' }}">
			{{Form::label('mother_nationality', 'Nationality', ['class' => 'col-form-label'])}}
			{{Form::text('mother_nationality', '', ['class' => 'form-control', 'placeholder' => 'Nationality', 'required'])}}
			<small class="text-danger">{{ $errors->first('mother_nationality') }}</small>
		</div>
		<div class="col-md-6{{ $errors->has('mother_religion') ? ' has-error' : '' }}">
			{{Form::label('mother_religion', 'Religion', ['class' => 'col-form-label'])}}
			{{Form::text('mother_religion', '', ['class' => 'form-control', 'placeholder' => 'Religion', 'required'])}}
			<small class="text-danger">{{ $errors->first('mother_religion') }}</small>
		</div>   
	</div>
	

	<div class="form-row">
		<div class="col-md-6{{ $errors->has('mother_working_status') ? ' has-error' : '' }}">
	        {{Form::label('mother_working_status', 'Working Status', ['class' => 'col-form-label'])}}
	        {{Form::select('mother_working_status', ['Locally Employed' => 'Locally Employed', 'Abroad(OFW)' => 'Abroad (OFW)', 'Businessman/Home-Based' => 'Businessman/Home-Based', 'Not Working' => 'Not Working'], null, ['class' => 'form-control', 'placeholder' => 'Working Status', 'required'])}}
	        <small class="text-danger">{{ $errors->first('mother_working_status') }}</small>
	    </div>
		<div class="col-md-6{{ $errors->has('mother_occupation') ? ' has-error' : '' }}">
		    {{Form::label('mother_occupation', 'Occupation', ['class' => 'col-form-label'])}}
		    {{Form::text('mother_occupation', '', ['class' => 'form-control', 'placeholder' => 'Occupation', 'required'])}}
		    <small class="text-danger">{{ $errors->first('mother_occupation') }}</small>
		</div>				   
	</div>

	<div class="form-row">		
		<div class="col-md-12{{ $errors->has('mother_company_contact') ? ' has-error' : '' }}">
			    {{Form::label('mother_company_contact', 'Company Address and Contact no.', ['class' => 'col-form-label'])}}
			    {{Form::text('mother_company_contact', '', ['class' => 'form-control', 'placeholder' => 'Company Address or Contact Number'])}}
			    <small class="text-danger">{{ $errors->first('company_contact') }}</small>
			</div>
		</div>

	<div class="form-row">
		<div class="col-md-6{{ $errors->has('mother_education') ? ' has-error' : '' }}">
		    {{Form::label('mother_education', 'Highest Educational Attainment', ['class' => 'col-form-label'])}}
		    {{Form::text('mother_education', '', ['class' => 'form-control', 'placeholder' => 'Highest Educational Attainment', 'required'])}}
		    <small class="text-danger">{{ $errors->first('mother_education') }}</small>
		</div> 
		<div class="col-md-6{{ $errors->has('mother_degree') ? ' has-error' : '' }}">
		    {{Form::label('mother_degree', 'Degree', ['class' => 'col-form-label'])}}
		    {{Form::text('mother_degree', '', ['class' => 'form-control', 'placeholder' => 'Degree'])
		    }}
		    <small class="text-danger">{{ $errors->first('mother_degree') }}</small>
		</div> 
	</div>


	<div style="margin-bottom: 10px;" class="form-row">
		<div class="col-md-6{{ $errors->has('mother_contact_number') ? ' has-error' : '' }}">
		    {{Form::label('mother_contact_number', 'Contact Number', ['class' => 'col-form-label'])}}
		    {{Form::text('mother_contact_number', '', ['class' => 'form-control', 'placeholder' => 'Contact Number', 'required'])}}
		    <small class="text-danger">{{ $errors->first('mother_contact_number') }}</small>
		</div>
		<div class="col-md-6{{ $errors->has('mother_email_address') ? ' has-error' : '' }}">
		    {{Form::label('mother_email_address', 'Email Adress', ['class' => 'col-form-label'])}}
		    {{Form::email('mother_email_address', '', ['class' => 'form-control', 'placeholder' => 'E-Mail Address'])}}
		    <small class="text-danger">{{ $errors->first('mother_email_address') }}</small>
		</div>
	</div>
	<a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}   
    {!! Form::close() !!}
@endsection