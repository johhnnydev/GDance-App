@extends('layouts.app')

@section('content')
    {!! Form::open(['id' => 'form', 'action' => ['StudentsController@update', $student->id], 'method' => 'POST']) !!}
    	{{ csrf_field() }}
        <h1>Student Information</h1>
        
        <div class="form-row">
            <div class="col-md-4{{ $errors->has('usn') ? ' has-error' : '' }}">
                {{Form::label('usn', 'Usn', ['class' => 'col-form-label'])}}
                {{Form::text('usn', $student->usn, ['class' => 'form-control', 'placeholder' => 'usn', 'required'])}}
                <small class="text-danger">{{ $errors->first('usn') }}</small>
            </div>
            <div class="col-md-4{{ $errors->has('yr_crs') ? ' has-error' : '' }}">
                {{Form::label('yr_crs', 'Grade-Section/Year-Course', ['class' => 'col-form-label'])}}
                {{Form::text('yr_crs', $student->yr_crs, ['class' => 'form-control', 'placeholder' => 'Grade-Section/Year-Course', 'required'])}}
                <small class="text-danger">{{ $errors->first('yr_crs') }}</small>
            </div>
            <div class="col-md-4{{ $errors->has('birthday') ? ' has-error' : '' }}">
                {{Form::label('birthday', 'Birthday', ['class' => 'col-form-label'])}}
                {{Form::date('birthday', $student->birthday, ['class' => 'form-control', 'placeholder' => '', 'required'])}}
                <small class="text-danger">{{ $errors->first('birthday') }}</small>  
            </div>
        </div>
               
        <div class="form-row">
            <div class="col-md-3{{ $errors->has('first_name') ? ' has-error' : '' }}">
                {{Form::label('first_name', 'First Name', ['class' => 'col-form-label'])}}
                {{Form::text('first_name', $student->first_name, ['class' => 'form-control', 'placeholder' => 'First Name', 'required'])}}
                <small class="text-danger">{{ $errors->first('first_name') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                {{Form::label('middle_name', 'Middle Name', ['class' => 'col-form-label'])}}
                {{Form::text('middle_name', $student->middle_name, ['class' => 'form-control', 'placeholder' => 'Middle Name', 'required'])}}
                <small class="text-danger">{{ $errors->first('middle_name') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('last_name') ? ' has-error' : '' }}">
                {{Form::label('last_name', 'Last Name', ['class' => 'col-form-label'])}}
                {{Form::text('last_name', $student->last_name, ['class' => 'form-control', 'placeholder' => 'Last Name', 'required'])}}
                <small class="text-danger">{{ $errors->first('last_name') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('nickname') ? ' has-error' : '' }}">
                {{Form::label('nickname', 'Nick Name', ['class' => 'col-form-label'])}}
                {{Form::text('nickname', $student->nickname, ['class' => 'form-control', 'placeholder' => 'Nickname', 'required'])}}
				<small class="text-danger">{{ $errors->first('nickname') }}</small>
            </div> 
        </div> 

        <div class="form-row">            
            <div class="col-md-3{{ $errors->has('gender') ? ' has-error' : '' }}">
                {{Form::label('gender', 'Gender', ['class' => 'col-form-label'])}}
                {{Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], $student->gender, ['class' => 'form-control', 'placeholder' => 'Gender'])}}
                <small class="text-danger">{{ $errors->first('gender') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('civil_status') ? ' has-error' : '' }}">
                {{Form::label('civil_status', 'Civil Status', ['class' => 'col-form-label'])}}
                {{Form::select('civil_status', ['Single' => 'Single', 'Married' => 'Married','Divorced' => 'Divorced','Separated' => 'Separated', 'Widowed' => 'Widowed'], $student->civil_status, ['class' => 'form-control', 'placeholder' => 'Civil Status'])}}
                <small class="text-danger">{{ $errors->first('civil_status') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('nationality') ? ' has-error' : '' }}">
                {{Form::label('nationality', 'Nationality', ['class' => 'col-form-label'])}}
                {{Form::text('nationality', $student->nationality, ['class' => 'form-control', 'placeholder' => 'ex. Filipino'])}}
                <small class="text-danger">{{ $errors->first('nationality') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('religion') ? ' has-error' : '' }}">
                {{Form::label('religion', 'Religion', ['class' => 'col-form-label'])}}
                {{Form::text('religion', $student->religion, ['class' => 'form-control', 'placeholder' => 'Religion'])}}
                <small class="text-danger">{{ $errors->first('religion') }}</small>
            </div>   
        </div>        

        <div class="form-row">
            <div class="col-md-12{{ $errors->has('present_address') ? ' has-error' : '' }}">
                {{Form::label('present_address', 'Present Address', ['class' => 'col-form-label'])}}
                {{Form::text('present_address', $student->present_address, ['class' => 'form-control', 'placeholder' => 'Present Address'])}}
                <small class="text-danger">{{ $errors->first('present_address') }}</small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12{{ $errors->has('permanent_address') ? ' has-error' : '' }}">
                {{Form::label('permanent_address', 'Permanent Address', ['class' => 'col-form-label'])}}
                {{Form::text('permanent_address', $student->permanent_address, ['class' => 'form-control', 'placeholder' => 'San Jose Del Monte, Bulacan'])}}
                <small class="text-danger">{{ $errors->first('permanent_address') }}</small>
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-md-3{{ $errors->has('living_in') ? ' has-error' : '' }}">
                {{Form::label('living_in', 'Living in', ['class' => 'col-form-label'])}}
                {{Form::text('living_in', $student->living_in, ['class' => 'form-control', 'placeholder' => 'own house | dorm | relatives'])}}
                <small class="text-danger">{{ $errors->first('living_in') }}</small>
            </div>
            <div class="col-md-9{{ $errors->has('living_with') ? ' has-error' : '' }}">
                {{Form::label('living_with', 'Living with', ['class' => 'col-form-label'])}}
                {{Form::text('living_with', $student->living_with, ['class' => 'form-control', 'placeholder' => 'parents | mother | father | sibling | grandparents | uncle | aunt'])}}
                <small class="text-danger">{{ $errors->first('living_with') }}</small>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-3{{ $errors->has('contact_number') ? ' has-error' : '' }}">
                {{Form::label('contact_number', 'Contact Number', ['class' => 'col-form-label'])}}
                {{Form::text('contact_number', $student->contact_number, ['class' => 'form-control', 'placeholder' => '09352753971'])}}
                <small class="text-danger">{{ $errors->first('contact_number') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('email_address') ? ' has-error' : '' }}">
                {{Form::label('email_address', 'Email Adress', ['class' => 'col-form-label'])}}
                {{Form::text('email_address', $student->email_address, ['class' => 'form-control', 'placeholder' => 'juguilon.levi.3@gmail.com'])}}
                <small class="text-danger">{{ $errors->first('email_address') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('emergency_contact_person') ? ' has-error' : '' }}">
                {{Form::label('emergency_contact_person', 'Emergency contact person', ['class' => 'col-form-label'])}}
                {{Form::text('emergency_contact_person', $student->emergency_contact_person, ['class' => 'form-control', 'placeholder' => 'Conctact person'])}}
                <small class="text-danger">{{ $errors->first('emergency_contact_person') }}</small>
            </div>
            <div class="col-md-3{{ $errors->has('emergency_contact_number') ? ' has-error' : '' }}">
                {{Form::label('emergency_contact_number', 'Emergency contact number', ['class' => 'col-form-label'])}}
                {{Form::text('emergency_contact_number', $student->emergency_contact_number, ['class' => 'form-control', 'placeholder' => '544565'])}}
                <small class="text-danger">{{ $errors->first('emergency_contact_number') }}</small>
            </div>
        </div>

        <div style="margin-bottom: 10px;" class="form-row">
            <div class="col-md-6{{ $errors->has('legal_status') ? ' has-error' : '' }}">
                {{Form::label('legal_status', 'Legal Status', ['class' => 'col-form-label'])}}
                {{-- {{Form::text('legal_status', $student->legal_status, ['class' => 'form-control', 'placeholder' => 'bastard'])}} --}}
                {{Form::select('legal_status', ['Legitimate' => 'Legitimate', 'Illegitimate' => 'Illegitimate'], $student->legal_status, ['class' => 'form-control', 'placeholder' => 'Legal Status', 'required'])}}
                <small class="text-danger">{{ $errors->first('legal_status') }}</small>
            </div>
            <div class="col-md-6{{ $errors->has('languages_spoken') ? ' has-error' : '' }}">
                {{Form::label('languages_spoken', 'Languages Spoken', ['class' => 'col-form-label'])}}
                {{Form::text('languages_spoken', $student->languages_spoken, ['class' => 'form-control', 'placeholder' => 'bisarya'])}}
                <small class="text-danger">{{ $errors->first('languages_spoken') }}</small>
            </div>            
        </div>

        {{-- hack and simulate don't remove--}}
        {{Form::hidden('_method', 'PUT')}}
        <a style="margin-right: 10px;" class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
        {{Form::submit('Save', ['class' => 'btn btn-primary'])}}         
    {!! Form::close() !!}
@endsection            