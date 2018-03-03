@extends('layouts.app')
@section('content')
@if(session()->has('message'))
	@if(session()->get('message') == 'Successful')
	    <div class="alert alert-success">
	        Violation added succesfully.
	    </div>
	@elseif(!session()->get('message') == 'Successful')
		<div class="alert alert-danger">
	        Something went wrong. Please try again later.
	    </div>
    @endif
@endif
<div class="card border-light card-shadow">
	<div class="card-body">
		<h1 class="text-primary">Add Violation</h1>
		{!! Form::open(['id' => 'form', 'action' => 'ViolationController@store', 'method' => 'POST']) !!}
			{{ csrf_field() }}

			<div class="form-row">			
				<div class="col-3">
					{{Form::label('usn', 'USN')}}
					<input type="number" name="usn" class="form-control{{ $errors->has('usn') ? ' is-invalid' : '' }}" placeholder="USN" id="usn">
					<div class="invalid-feedback">
                        {{ $errors->first('usn') }}
                    </div>
					{{-- {{Form::text('usn', '', ['class' => 'form-control', 'placeholder' => 'usn', 'id' => 'usn'])}} --}}
				</div>
				<div class="col">
					<div class="labelmoto">
						<span id="name-cont" class="magic-line">Enter the usn of the student.</span>
					</div>
				</div>
			</div>
			
			<div class="form-row">
				<div class="col">
				    {{Form::label('nature_offense', 'Nature of Offense', ['class' => 'col-form-label'])}}
				    {{-- <input placeholder="Nature of Offense" class="form-control{{ $errors->has('nature_offense') ? ' is-invalid' : '' }}" type="number" name="nature_offense" min="1" max="27"> --}}
				    <select name="nature_offense" class="custom-select form-control{{ $errors->has('nature_offense') ? ' is-invalid' : '' }}">
				    	<option selected="selected" value>Nature of Offense</option>
				    	<option value="1">Failing to proper wear valid ID card while inside the school.</option>
				    	<option value="2">Using for official school purposes or transaction own ID card, which is neither authorized nor valid.</option>
				    	<option value="3">Unauthorized stay in, or entry to the school after 9:00 PM.</option>
				    	<option value="4">Littering</option>
				    	<option value="5">Unauthorized posting/distributing of leaflets, posters, questionnaires, surveys or similar materials.</option>
				    	<option value="6">Defamation</option>
				    	<option value="7">Possession of material that is offensive to morals, contrary to law, public order, good custom, and school policies.</option>
				    	<option value="8">Engaging in lewd, indecent, obscene, immoral or provocative conduct.</option>
				    	<option value="9">Stealing</option>
				    	<option value="10">Bribery</option>
				    	<option value="11">Possession of dangerous stuff.</option>
				    	<option value="12">Destruction of property.</option>
				    	<option value="13">Deceit</option>
				    	<option value="14">Possession of alcoholic beverages; entering the school in a state of intoxication.</option>
				    	<option value="15">Using, possessing, or distributing illicit drugs.</option>
				    	<option value="16">Possessing, distributing or selling cpoies of offensive, obscene, or harrasing magazines.</option>
				    	<option value="17">Assault</option>
				    	<option value="18">Gambling</option>
				    	<option value="19">Forgery</option>
				    	<option value="20">Obstruction</option>
				    	<option value="21">Threat</option>
				    	<option value="22">Unauthorized use of school facility.</option>
				    	<option value="23">Unauthorized use of school's name.</option>
				    	<option value="24">Cheating</option>
				    	<option value="25">Abusive behavior</option>
				    	<option value="26">Indecency</option>
				    	<option value="27">Poor sportsmanship.</option>
				    </select>
                    <div class="invalid-feedback">
                        {{ $errors->first('nature_offense') }}
                    </div>
				</div>
			</div>

			<div class="form-row">
				<div class="col">
					{{Form::label('grade_section', 'Grade and Section', ['class' => 'col-form-label'])}}
					<input type="text" name="grade_section" id="section" class="form-control{{ $errors->has('grade_section') ? ' is-invalid' : '' }}" placeholder="Grade/Year & Section">
					<div class="invalid-feedback">
                        {{ $errors->first('grade_section') }}
					</div>
					{{-- {{Form::text('grade_section', '', ['id' => 'section', 'class' => 'form-control', 'placeholder' => 'Grade/Year & Section'])}} --}}
				</div>

				<div class="col">
				    {{Form::label('freq_offense', 'Frequency of Offense', ['class' => 'col-form-label'])}}
				    <select name="freq_offense" class="custom-select form-control{{ $errors->has('freq_offense') ? ' is-invalid' : '' }}">
				    	<option selected="selected" value>Frequency of Offense</option>
				    	<option value="1">First</option>
				    	<option value="2">Second</option>
				    	<option value="3">Third</option>
				    </select>
				    <div class="invalid-feedback">
                        {{ $errors->first('freq_offense') }}
                    </div>
				    {{-- {{Form::select('freq_offense', ['1' => 'First', '2' => 'Second', '3' => 'Third'], null, ['class' => 'form-control', 'placeholder' => 'Frequency of Offense'])}} --}}
				</div>
			</div>

			<div class="form-row vio-border">		
				<div class="col-md-12">
					{{Form::label('sanction_given', 'Sanction Given', ['class' => 'col-form-label'])}}
					<input type="text" name="sanction_given" class="form-control{{ $errors->has('sanction_given') ? ' is-invalid' : '' }}" placeholder="Sanction given">
				    <div class="invalid-feedback">
                        {{ $errors->first('sanction_given') }}
                    </div>
					{{-- {{Form::text('sanction_given', '', ['class' => 'form-control', 'placeholder' => 'Hero to Zero'])}} --}}
				</div>
			</div>

            <input class="btn btn-primary" style="cursor: pointer;" type="submit" value="submit">
			{{-- {{Form::submit('Submit', ['class' => 'btn btn-primary'], ['style' => 'cursor: pointer;'])}} --}}
		{!! Form::close() !!}
	</div>	
</div>
<script>
	$("#usn").change(function() {
		var usn = $("#usn").val();
		var section = $("#section");
		$.ajax({
			url: '/getname',
			data: {
				usn: usn
			},
			success: function(data){
				if(!$.trim(data)){
					$('#name-cont').html("Can't find the student");						
				}else{
					$('#name-cont').html(data.first_name + ' ' + data.middle_name + ' ' + data.last_name + ' | ' + data.yr_crs);
					section.val(data.yr_crs);	
				}
			}
		});
	});
</script>
@endsection
