@extends('layouts.app')

@section('content')
    {!! Form::open(['id' => 'form', 'action' => ['FatherController@update', $father->id], 'method' => 'POST']) !!}
        {{ csrf_field() }}
        <h1>Father Information</h1>
        <div class="form-row">
            <div class="col-md-3{{ $errors->has('father_fname') ? ' has-error' : '' }}">
                {{Form::label('father_fname', 'First Name', ['class' => 'col-form-label'])}}
                {{Form::text('father_fname', $father->father_fname, ['class' => 'form-control', 'placeholder' => 'First Name', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_fname') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('father_mname') ? ' has-error' : ''}} ">
                {{Form::label('father_mname', 'Middle Name', ['class' => 'col-form-label'])}}
                {{Form::text('father_mname', $father->father_mname, ['class' => 'form-control', 'placeholder' => 'Middle Name', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_mname') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('father_lname') ? ' has-error' : ''}} ">
                {{Form::label('father_lname', 'Last Name', ['class' => 'col-form-label'])}}
                {{Form::text('father_lname', $father->father_lname, ['class' => 'form-control', 'placeholder' => 'Last Name', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_lname') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('father_suffix') ? ' has-error' : ''}} ">
                {{Form::label('father_suffix', 'Suffix', ['class' => 'col-form-label'])}}
                {{Form::text('father_suffix', $father->father_suffix, ['class' => 'form-control', 'placeholder' => 'ex. jr'])}}
                <small class="text-danger">{{ $errors->first('father_suffix') }}</small>
            </div> 
        </div>

        <div class="form-row">
            <div class="col-md-12{{ $errors->has('father_address') ? ' has-error' : '' }}">
                {{Form::label('father_address', 'Present Address', ['class' => 'col-form-label'])}}
                {{Form::text('father_address', $father->father_address, ['class' => 'form-control', 'placeholder' => 'Present Address', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_address') }}</small>
            </div>            
        </div>
        
        <div class="form-row">  
            <div class="col-md-4{{ $errors->has('father_birthday') ? ' has-error' : '' }}">
                {{Form::label('father_birthday', 'Birthday', ['class' => 'col-form-label'])}}
                {{Form::date('father_birthday', $father->father_birthday, ['class' => 'form-control', 'placeholder' => '', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_birthday') }}</small>  
            </div>
            <div class="col-md-4{{ $errors->has('father_age') ? ' has-error' : '' }}">
                {{Form::label('father_age', 'Age', ['class' => 'col-form-label'])}}
                {{Form::number('father_age', $father->father_age, ['class' => 'form-control', 'placeholder' => 'Age', 'min' => '1', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_age') }}</small>
            </div>
            <div class="col-md-4{{ $errors->has('father_civil_status') ? ' has-error' : '' }}">
                {{Form::label('father_civil_status', 'Civil Status', ['class' => 'col-form-label'])}}
                {{Form::select('father_civil_status', ['Single' => 'Single', 'Married' => 'Married','Divorced' => 'Divorced','Separated' => '
                Separated', 'Widowed' => 'Widowed'], $father->father_civil_status, ['class' => 'form-control', 'placeholder' => 'Civil Status', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_civil_status') }}</small>
            </div>
        </div>
        <div class="form-row">      
            <div class="col-md-6{{ $errors->has('father_nationality') ? ' has-error' : '' }}">
                {{Form::label('father_nationality', 'Nationality', ['class' => 'col-form-label'])}}
                {{Form::text('father_nationality', $father->father_nationality, ['class' => 'form-control', 'placeholder' => 'Nationality', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_nationality') }}</small>
            </div>
            <div class="col-md-6{{ $errors->has('father_religion') ? ' has-error' : '' }}">
                {{Form::label('father_religion', 'Religion', ['class' => 'col-form-label'])}}
                {{Form::text('father_religion', $father->father_religion, ['class' => 'form-control', 'placeholder' => 'Religion', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_religion') }}</small>
            </div>   
        </div>
        
        <div class="form-row">
            <div class="col-md-6{{ $errors->has('father_working_status') ? ' has-error' : '' }}">
                {{Form::label('father_working_status', 'Working Status', ['class' => 'col-form-label'])}}
                {{Form::select('father_working_status', ['Locally Employed' => 'Locally Employed', 'Abroad(OFW)' => 'Abroad (OFW)', 'Businessman/Home-Based' => 'Businessman/Home-Based', 'Not Working' => 'Not Working'], $father->father_working_status, ['class' => 'form-control', 'placeholder' => 'Working Status', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_working_status') }}</small>
            </div>
            <div class="col-md-6{{ $errors->has('father_occupation') ? ' has-error' : '' }}">
                {{Form::label('father_occupation', 'Occupation', ['class' => 'col-form-label'])}}
                {{Form::text('father_occupation', $father->father_occupation, ['class' => 'form-control', 'placeholder' => 'Occupation', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_occupation') }}</small>
            </div>
        </div>

        <div class="form-row">      
            <div class="col-md-12{{ $errors->has('father_company_contact') ? ' has-error' : '' }}">
                {{Form::label('father_company_contact', 'Company Address and Contact no.', ['class' => 'col-form-label'])}}
                {{Form::text('father_company_contact', $father->father_company_contact, ['class' => 'form-control', 'placeholder' => 'Company address or Contact Number'])}}
                <small class="text-danger">{{ $errors->first('company_contact') }}</small>
            </div>   
        </div>

        <div class="form-row">
            <div class="col-md-6{{ $errors->has('father_education') ? ' has-error' : '' }}">
                {{Form::label('father_education', 'Highest Educational Attainment', ['class' => 'col-form-label'])}}
                {{Form::text('father_education', $father->father_education, ['class' => 'form-control', 'placeholder' => 'Highest Educational Attainment', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_education') }}</small>
            </div> 
            <div class="col-md-6{{ $errors->has('father_degree') ? ' has-error' : '' }}">
                {{Form::label('father_degree', 'Degree', ['class' => 'col-form-label'])}}
                {{Form::text('father_degree', $father->father_degree, ['class' => 'form-control', 'placeholder' => 'Degree'])
                }}
                <small class="text-danger">{{ $errors->first('father_degree') }}</small>
            </div> 
        </div>

        <div style="margin-bottom: 10px;" class="form-row">
            <div class="col-md-6{{ $errors->has('father_contact_number') ? ' has-error' : '' }}">
                {{Form::label('father_contact_number', 'Contact Number', ['class' => 'col-form-label'])}}
                {{Form::text('father_contact_number', $father->father_contact_number, ['class' => 'form-control', 'placeholder' => 'Contact Number', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_contact_number') }}</small>
            </div>
            <div class="col-md-6{{ $errors->has('father_email_address') ? ' has-error' : '' }}">
                {{Form::label('father_email_address', 'Email Adress', ['class' => 'col-form-label'])}}
                {{Form::email('father_email_address', $father->father_email_address, ['class' => 'form-control', 'placeholder' => 'E-Mail Address', 'required'])}}
                <small class="text-danger">{{ $errors->first('father_email_address') }}</small>
            </div>
        </div>

    {{-- hack and simulate don't remove --}}
    {{Form::hidden('_method', 'PUT')}}
    <a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
    {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection            


