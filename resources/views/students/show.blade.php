@extends('layouts.app')

@section('content')
	<h2 id="#SCR">Student Cumulative Record <small>Guidance and Counselling Office</small></h2>
	<div class="row">			
		<div class="col-10">
			@if($student == NULL)
				<h4>Personal Data</h4>
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td><b>Name</b></td>
							<td></td>
							<td><b>Gender</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Birthday</b></td>
							<td></td>
							<td><b>Civil Status</b></td>								
							<td></td>
						</tr>
						<tr>
							<td><b>Nationality</b></td>
							<td></td>
							<td><b>Religion</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Present Address</b></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td><b>Permanent Address</b></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td><b>Living In</b></td>
							<td></td>
							<td><b>Living With</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Contact Number</b></td>
							<td></td>
							<td><b>E-mail</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Legal Status</b></td>
							<td></td>
							<td><b>Languages Spoken</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Emergency Contact Person</b></td>
							<td></td>
							<td><b>Emergency Contact Number</b></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			@else
				<h4>Personal Data</h4>
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td><b>Name</b></td>
							<td>{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</td>
							<td><b>Gender</b></td>
							<td>{{$student->gender}}</td>
						</tr>
						<tr>
							<td><b>Birthday</b></td>
							<td>{{$student->birthday}}</td>
							<td><b>Civil Status</b></td>								
							<td>{{$student->civil_status}}</td>
						</tr>
						<tr>
							<td><b>Nationality</b></td>
							<td>{{$student->nationality}}</td>
							<td><b>Religion</b></td>
							<td>{{$student->religion}}</td>
						</tr>
						<tr>
							<td><b>Present Address</b></td>
							<td colspan="3">{{$student->present_address}}</td>
						</tr>
						<tr>
							<td><b>Permanent Address</b></td>
							<td colspan="3">{{$student->permanent_address}}</td>
						</tr>
						<tr>
							<td><b>Living In</b></td>
							<td>{{$student->living_in}}</td>
							<td><b>Living With</b></td>
							<td>{{$student->living_with}}</td>
						</tr>
						<tr>
							<td><b>Contact Number</b></td>
							<td>{{$student->contact_number}}</td>
							<td><b>E-mail</b></td>
							<td>{{$student->email_address}}</td>
						</tr>
						<tr>
							<td><b>Legal Status</b></td>
							<td>{{$student->legal_status}}</td>
							<td><b>Languages Spoken</b></td>
							<td>{{$student->languages_spoken}}</td>
						</tr>
						<tr>
							<td><b>Emergency Contact Person</b></td>
							<td>{{$student->emergency_contact_person}}</td>
							<td><b>Emergency Contact Number</b></td>
							<td>{{$student->emergency_contact_number}}</td>
						</tr>
					</tbody>
				</table>
			@endif
			@if($father == NULL)
				<h4>Father Information</h4>
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td><b>Name</b></td>
							<td></td>
							<td><b>Birthday</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Age</b></td>
							<td></td>
							<td><b>Civil Status</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Nationality</b></td>
							<td></td>
							<td><b>Religion</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Present Address</b></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td><b>Occupation</b></td>
							<td></td>
							<td><b>Working Status</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Company Address and Contact Number</b></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td><b>Highest Educational Attainment</b></td>
							<td></td>
							<td><b>Degree</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Contact Number</b></td>
							<td></td>
							<td><b>Email Address</b></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			@else
				<h4>Father Information</h4>
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td><b>Name</b></td>
							<td>{{$father->father_fname}} {{$father->father_mname}} {{$father->father_lname}} {{$father->father_suffix}}</td>
							<td><b>Birthday</b></td>
							<td>{{$father->father_birthday}}</td>
						</tr>
						<tr>
							<td><b>Age</b></td>
							<td>{{$father->father_age}}</td>
							<td><b>Civil Status</b></td>
							<td>{{$father->father_civil_status}}</td>
						</tr>
						<tr>
							<td><b>Nationality</b></td>
							<td>{{$father->father_nationality}}</td>
							<td><b>Religion</b></td>
							<td>{{$father->father_religion}}</td>
						</tr>
						<tr>
							<td><b>Present Address</b></td>
							<td colspan="3">{{$father->father_address}}</td>
						</tr>
						<tr>
							<td><b>Occupation</b></td>
							<td>{{$father->father_occupation}}</td>
							<td><b>Working Status</b></td>
							<td>{{$father->father_working_status}}</td>
						</tr>
						<tr>
							<td><b>Company Address and Contact Number</b></td>
							<td colspan="3">{{$father->father_company_contact}}</td>
						</tr>
						<tr>
							<td><b>Highest Educational Attainment</b></td>
							<td>{{$father->father_education}}</td>
							<td><b>Degree</b></td>
							<td>{{$father->father_degree}}</td>
						</tr>
						<tr>
							<td><b>Contact Number</b></td>
							<td>{{$father->father_contact_number}}</td>
							<td><b>Email Address</b></td>
							<td>{{$father->father_email_address}}</td>
						</tr>
					</tbody>
				</table>
			@endif
			@if($mother == NULL)
				<h4>Mother Information</h4>
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td><b>Name</b></td>
							<td></td>
							<td><b>Birthday</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Age</b></td>
							<td></td>
							<td><b>Civil Status</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Nationality</b></td>
							<td></td>
							<td><b>Religion</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Present Address</b></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td><b>Occupation</b></td>
							<td></td>
							<td><b>Working Status</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Company Address and Contact Number</b></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td><b>Highest Educational Attainment</b></td>
							<td></td>
							<td><b>Degree</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Contact Number</b></td>
							<td></td>
							<td><b>Email Address</b></td>
							<td></td>
						</tr>
					</tbody>
				</table>		
			@else
				<h4>Mother Information</h4>
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td><b>Name</b></td>
							<td>{{$mother->mother_fname}} {{$mother->mother_mname}} {{$mother->mother_lname}} {{$mother->mother_suffix}}</td>
							<td><b>Birthday</b></td>
							<td>{{$mother->mother_birthday}}</td>
						</tr>
						<tr>
							<td><b>Age</b></td>
							<td>{{$mother->mother_age}}</td>
							<td><b>Civil Status</b></td>
							<td>{{$mother->mother_civil_status}}</td>
						</tr>
						<tr>
							<td><b>Nationality</b></td>
							<td>{{$mother->mother_nationality}}</td>
							<td><b>Religion</b></td>
							<td>{{$mother->mother_religion}}</td>
						</tr>
						<tr>
							<td><b>Present Address</b></td>
							<td colspan="3">{{$mother->mother_address}}</td>
						</tr>
						<tr>
							<td><b>Occupation</b></td>
							<td>{{$mother->mother_occupation}}</td>
							<td><b>Working Status</b></td>
							<td>{{$mother->mother_working_status}}</td>
						</tr>
						<tr>
							<td><b>Company Address and Contact Number</b></td>
							<td colspan="3">{{$mother->mother_company_contact}}</td>
						</tr>
						<tr>
							<td><b>Highest Educational Attainment</b></td>
							<td>{{$mother->mother_education}}</td>
							<td><b>Degree</b></td>
							<td>{{$mother->mother_degree}}</td>
						</tr>
						<tr>
							<td><b>Contact Number</b></td>
							<td>{{$mother->mother_contact_number}}</td>
							<td><b>Email Address</b></td>
							<td>{{$mother->mother_email_address}}</td>
						</tr>
					</tbody>
				</table>				
			@endif
			@if($guardian == NULL)
				<h4>Guardian Information</h4>
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td><b>Name</b></td>
							<td></td>
							<td><b>Birthday</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Age</b></td>
							<td></td>
							<td><b>Civil Status</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Nationality</b></td>
							<td></td>
							<td><b>Religion</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Present Address</b></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td><b>Occupation</b></td>
							<td></td>
							<td><b>Working Status</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Company Address and Contact Number</b></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td><b>Highest Educational Attainment</b></td>
							<td></td>
							<td><b>Degree</b></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Contact Number</b></td>
							<td></td>
							<td><b>Email Address</b></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			@else
				<h4>Guardian Information</h4>
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td><b>Name</b></td>
							<td>{{$guardian->guardian_fname}} {{$guardian->guardian_mname}} {{$guardian->guardian_lname}} {{$guardian->guardian_suffix}}</td>
							<td><b>Birthday</b></td>
							<td>{{$guardian->guardian_birthday}}</td>
						</tr>
						<tr>
							<td><b>Age</b></td>
							<td>{{$guardian->guardian_age}}</td>
							<td><b>Civil Status</b></td>
							<td>{{$guardian->guardian_civil_status}}</td>
						</tr>
						<tr>
							<td><b>Nationality</b></td>
							<td>{{$guardian->guardian_nationality}}</td>
							<td><b>Religion</b></td>
							<td>{{$guardian->guardian_religion}}</td>
						</tr>
						<tr>
							<td><b>Present Address</b></td>
							<td colspan="3">{{$guardian->guardian_address}}</td>
						</tr>
						<tr>
							<td><b>Occupation</b></td>
							<td>{{$guardian->guardian_occupation}}</td>
							<td><b>Working Status</b></td>
							<td>{{$guardian->guardian_working_status}}</td>
						</tr>
						<tr>
							<td><b>Company Address and Contact Number</b></td>
							<td colspan="3">{{$guardian->guardian_company_contact}}</td>
						</tr>
						<tr>
							<td><b>Highest Educational Attainment</b></td>
							<td>{{$guardian->guardian_education}}</td>
							<td><b>Degree</b></td>
							<td>{{$guardian->guardian_degree}}</td>
						</tr>
						<tr>
							<td><b>Contact Number</b></td>
							<td>{{$guardian->guardian_contact_number}}</td>
							<td><b>Email Address</b></td>
							<td>{{$guardian->guardian_email_address}}</td>
						</tr>
					</tbody>
				</table>
			@endif
			<h4>Siblings Information</h4>
			@if(count($siblings) == 0)		  	
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<td><b>Name</b></td>
							<td><b>School/Place Of Work</b></td>
							<td><b>Birthday</b></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align: center;" colspan="4">No record</td>
						</tr>
				</table>
			@else
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<td><b>Name</b></td>
							<td><b>School/Place Of Work</b></td>
							<td><b>Birthday</b></td>
							{{-- <td></td> --}}
						</tr>
					</thead>
					<tbody>
					@foreach($siblings as $sibling)
						<tr>
							<td>{{$sibling->name}}</td>
							<td>{{$sibling->school_place_work}}</td>
							<td>{{$sibling->birthday}}</td>
							{{-- <td><a href="/sibling/{{$sibling->id}}/edit">Edit</a></td> --}}
						</tr>
					@endforeach	
				</table>
			@endif
			@if($schoolrecord == NULL)
				<h4>Scholastic Records</h4>
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<td></td>
							<td><b>School Attended</b></td>
							<td><b>Inclusive Years</b></td>
							<td><b>Course (College)</b></td>
						</tr>				
					</thead>
					<tbody>
						<tr>					
							<td><b>Elementary</b></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>					
							<td><b>Junior High</b></td>
							<td></td>
							<td></td>					
							<td></td>
						</tr>
						<tr>					
							<td><b>Senior High</b></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>					
							<td><b>College</b></td>
							<td></td>
							<td></td>
							<td></td>						
						</tr>
						<tr>
							<td><b>Easiest Subject/s Handled</b></td>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td><b>Difficult Subject/s Handled</b></td>
							<td colspan="4"></td>
						</tr>
					</tbody>
				</table>
			@else
				<h4>Scholastic Records</h4>
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<td></td>
							<td><b>School Attended</b></td>
							<td><b>Inclusive Years</b></td>
							<td><b>Course (College)</b></td>
						</tr>				
					</thead>
					<tbody>
						<tr>					
							<td><b>Elementary</b></td>
							<td>{{$schoolrecord->school_elem}}</td>
							<td>{{$schoolrecord->school_elem_years}}</td>
							<td></td>
						</tr>
						<tr>					
							<td><b>Junior High</b></td>
							<td>{{$schoolrecord->school_junior}}</td>
							<td>{{$schoolrecord->school_junior_years}}</td>					
							<td></td>
						</tr>
						<tr>					
							<td><b>Senior High</b></td>
							<td>{{$schoolrecord->school_senior}}</td>
							<td>{{$schoolrecord->school_senior_years}}</td>
							<td></td>
						</tr>
						<tr>					
							<td><b>College</b></td>
							<td>{{$schoolrecord->school_college}}</td>
							<td>{{$schoolrecord->school_college_years}}</td>
							<td>{{$schoolrecord->school_college_course}}</td>						
						</tr>
						<tr>
							<td><b>Easiest Subject/s Handled</b></td>
							<td colspan="4">{{$schoolrecord->easy_subjects}}</td>
						</tr>
						<tr>
							<td><b>Difficult Subject/s Handled</b></td>
							<td colspan="4">{{$schoolrecord->difficult_subjects}}</td>
						</tr>
					</tbody>
				</table>
			@endif
			<h4>Organizational Affiliations</h4>
			@if(count($orgs) == 0)
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<td><b>Name of Organization</b></td>
							<td><b>Inclusive Dates</b></td>
							<td><b>School-/Community-Based</b></td>
							<td><b>Position/s Held</b></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align: center;" colspan="5">No Record</td>
						</tr>
					</tbody>
				</table>
			@else
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<td><b>Name of Organization</b></td>
							<td><b>Inclusive Dates</b></td>
							<td><b>School-/Community-Based</b></td>
							<td><b>Position/s Held</b></td>
							{{-- <td></td> --}}
						</tr>
					</thead>
					<tbody>
						@foreach($orgs as $org)
						<tr>
							<td>{{$org->org_name}}</td>
							<td>{{$org->org_years}}</td>
							<td>{{$org->org_based}}</td>
							<td>{{$org->org_position}}</td>
							{{-- <td><a href="orgs/{{$org->id}}/edit">Edit</a></td> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
			@if($about == NULL)
				<h4>About Yourself</h4>
				<table class="table table-hover table-responsive">
					<tr>
						<td><b>Interest and Hobbies</b></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Skills and Talents</b></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Attributes and Attitudes</b></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Goals and Ambition in Life</b></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Assets and Strengths</b></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Liabilities and Weaknesses</b></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Present Concerns</b></td>
						<td></td>
					</tr>
				</table>
			@else
				<h4>About Yourself</h4>
				<table class="table table-hover table-responsive">
					<tr>
						<td><b>Interest and Hobbies</b></td>
						<td>{{$about->interest_hobbies}}</td>
					</tr>
					<tr>
						<td><b>Skills and Talents</b></td>
						<td>{{$about->skills_talents}}</td>
					</tr>
					<tr>
						<td><b>Attributes and Attitudes</b></td>
						<td>{{$about->attributes_attitudes}}</td>
					</tr>
					<tr>
						<td><b>Goals and Ambition in Life</b></td>
						<td>{{$about->goals_ambitions}}</td>
					</tr>
					<tr>
						<td><b>Assets and Strengths</b></td>
						<td>{{$about->assets_strengths}}</td>
					</tr>
					<tr>
						<td><b>Liabilities and Weaknesses</b></td>
						<td>{{$about->liabilities_weaknesses}}</td>
					</tr>
					<tr>
						<td><b>Present Concerns</b></td>
						<td>{{$about->present_concerns}}</td>
					</tr>
				</table>
			@endif
			<h1 id="SDA">Student Disciplinary Action Form <small>Office of Student Affairs</small></h1>
			@if(count($violations) == 0)
				<table class="table table-hover table-responsive">
					<thead class="thead">						
						<tr>
							<td><b>Nature of Offense</b></td>
							<td><b>Frequency</b></td>
							<td><b>Sanction Given</b></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align: center;" colspan="3">No record</td>
						</tr>
					</tbody>
				</table>
			@else
				<table class="table table-hover table-responsive">
					<thead class="thead">						
						<tr>
							<td><b>Nature of Offense</b></td>
							<td><b>Frequency</b></td>
							<td><b>Sanction Given</b></td>
							<td><b>Date Issued</b></td>
							<td><b>Time Issued</b></td>
						</tr>
					</thead>
					<tbody>
						@foreach($violations as $violation)
							<tr>
								<td>{{ $violation->nature_offense }}</td>
								<td>{{ $violation->freq_offense }}</td>
								<td>{{ $violation->sanction_given }}</td>							
								<td>{{ date('F j, Y', strtotime($violation->created_at)) }}</td>
								<td>{{ date('g:i a', strtotime($violation->created_at)) }}</td>							
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div> {{-- end of first column --}}
		<div class="col-2">
			<div>			
				<img src="{{ asset('/img/avatars/'.$user_avatar) }}" alt="..." class="bg ma">				
			</div>			
			<a style="width: 100%; margin-top: 10px;" class="btn btn-danger cursor-h" href="/studentprofile/{{$user->id}}"><i class="fa fa-file-pdf-o icon-sidebar" aria-hidden="true"></i>Export as PDF</a>
		</div>
	</div>
@endsection