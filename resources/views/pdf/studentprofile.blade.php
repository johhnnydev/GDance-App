<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$student->usn}}</title>
	<style>
		body{
			font-family: sans-serif;
		}
		h1, h2, h3, h4{
			margin: 0px;
		}
		table{
			table-layout: auto;
			width: 100%;
		}
		small{
			font-size: 20px;
		}
		#dddd{
			position: absolute;
			right: 10px;
			top: 86px;
		}
		table{
			font-size: 12px;
		}
		table td, .table th {
			padding: 3px;
			vertical-align: top;
			border-top: 1px solid #e9ecef;
		}
		.table-title{
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
<div class="container"> 
	<h1 id="ama-title">AMA Computer College Fairview</h1>
	<small>Guidance and Counseling Office</small>
	<hr>
	<h2>Student Cumulative Record</h2>
	<h3 id="dddd">{{$student->yr_crs}} | {{$student->usn}} | 2017-2018</h3>
	<hr>
	<h4 class="table-title">Personal Data</h4>
	<table>
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
	<h3>Family Background</h3>
	<hr>
	<h4 class="table-title">Father Information</h4>
	<table>
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
	<h4 class="table-title">Mother Information</h4>
	<table>
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
	<h4 class="table-title">Guardian Information</h4>
	<table>
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
	<h4 class="table-title">Siblings Information</h4>
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
				</tr>
			</thead>
			<tbody>
			@foreach($siblings as $sibling)
				<tr>
					<td>{{$sibling->name}}</td>
					<td>{{$sibling->school_place_work}}</td>
					<td>{{$sibling->birthday}}</td>
				</tr>
			@endforeach	
		</table>
	@endif
	<hr>
	<h3 class="table-title">Scholastic Records</h3>
	<hr>
	@if($schoolrecord == NULL)
		<table>
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
		<table>
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
	<hr>
	<h3 class="table-title">Organizational Affiliations</h3>
	<hr>
	@if(count($orgs) == 0)
		<table>
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
		<table>
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
				@foreach($orgs as $org)
				<tr>
					<td>{{$org->org_name}}</td>
					<td>{{$org->org_years}}</td>
					<td>{{$org->org_based}}</td>
					<td>{{$org->org_position}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endif
	<hr>
	<h3 class="table-title">About the student</h3>
	<hr>
	@if($about == NULL)
		<table>
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
		<table>
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
	<hr>
	<h3 class="table-title">Student Disciplinary Action Records</h3>
	<hr>
	@if(count($violations) == 0)
		<table style="margin-bottom: 10px;">
			<thead>						
				<tr>
					<td><b>Nature of Offense</b></td>
					<td><b>Frequency</b></td>
					<td><b>Sanction Given</b></td>							
					<td><b>Date Issued</b></td>
					<td><b>Time Issued</b></td>		
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="text-align: center;" colspan="5">No record</td>
				</tr>
			</tbody>
		</table>
	@else
		<table>
			<thead>						
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
</div>
</body>
</html>