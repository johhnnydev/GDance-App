@extends('layouts.app')
@section('content')
@if(session()->has('message'))
	@if(session()->get('message') == 'Successful')
	    <div class="alert alert-success">
	        Violation added succesfully.
	    </div>
	@endif
	@if(session()->get('message') !== 'Successful')
		<div class="alert alert-danger">
	        {{ session()->get('message') }}
	    </div>
    @endif

    {{-- {{ dd(!session()->get('message') == 'Successful') }} --}}
@endif
<div class="card border-light card-shadow">
	<div class="card-body">
		<h1 class="text-primary">Add Violation</h1>
		{!! Form::open(['id' => 'form', 'action' => 'ViolationController@store', 'method' => 'POST']) !!}
			{{ csrf_field() }}

			<div class="form-row">			
				<div class="col-3">
					{{Form::label('usn', 'USN')}}
					<input type="number" name="usn" value="{{ old('usn') }}" class="form-control{{ $errors->has('usn') ? ' is-invalid' : '' }}" placeholder="USN" id="usn">
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
				    <select name="nature_offense" id="select" class="custom-select form-control{{ $errors->has('nature_offense') ? ' is-invalid' : '' }}">
				    	<option id="todisable" selected="selected" value>Nature of Offense</option>
				    	<option @if(old('nature_offense') == '1') selected @endif value="1">Failing to proper wear valid ID card while inside the school.</option>
				    	<option @if(old('nature_offense') == '2') selected @endif value="2">Using for official school purposes or transaction own ID card, which is neither authorized nor valid.</option>
				    	<option @if(old('nature_offense') == '3') selected @endif value="3">Unauthorized stay in, or entry to the school after 9:00 PM.</option>
				    	<option @if(old('nature_offense') == '4') selected @endif value="4">Littering</option>
				    	<option @if(old('nature_offense') == '5') selected @endif value="5">Unauthorized posting/distributing of leaflets, posters, questionnaires, surveys or similar materials.</option>
				    	<option @if(old('nature_offense') == '6') selected @endif value="6">Defamation</option>
				    	<option @if(old('nature_offense') == '7') selected @endif value="7">Possession of material that is offensive to morals, contrary to law, public order, good custom, and school policies.</option>
				    	<option @if(old('nature_offense') == '8') selected @endif value="8">Engaging in lewd, indecent, obscene, immoral or provocative conduct.</option>
				    	<option @if(old('nature_offense') == '9') selected @endif value="9">Stealing</option>
				    	<option @if(old('nature_offense') == '10') selected @endif value="10">Bribery</option>
				    	<option @if(old('nature_offense') == '11') selected @endif value="11">Possession of dangerous stuff.</option>
				    	<option @if(old('nature_offense') == '12') selected @endif value="12">Destruction of property.</option>
				    	<option @if(old('nature_offense') == '13') selected @endif value="13">Deceit</option>
				    	<option @if(old('nature_offense') == '14') selected @endif value="14">Possession of alcoholic beverages; entering the school in a state of intoxication.</option>
				    	<option @if(old('nature_offense') == '15') selected @endif value="15">Using, possessing, or distributing illicit drugs.</option>
				    	<option @if(old('nature_offense') == '16') selected @endif value="16">Possessing, distributing or selling cpoies of offensive, obscene, or harrasing magazines.</option>
				    	<option @if(old('nature_offense') == '17') selected @endif value="17">Assault</option>
				    	<option @if(old('nature_offense') == '18') selected @endif value="18">Gambling</option>
				    	<option @if(old('nature_offense') == '19') selected @endif value="19">Forgery</option>
				    	<option @if(old('nature_offense') == '20') selected @endif value="20">Obstruction</option>
				    	<option @if(old('nature_offense') == '21') selected @endif value="21">Threat</option>
				    	<option @if(old('nature_offense') == '22') selected @endif value="22">Unauthorized use of school facility.</option>
				    	<option @if(old('nature_offense') == '23') selected @endif value="23">Unauthorized use of school's name.</option>
				    	<option @if(old('nature_offense') == '24') selected @endif value="24">Cheating</option>
				    	<option @if(old('nature_offense') == '25') selected @endif value="25">Abusive behavior</option>
				    	<option @if(old('nature_offense') == '26') selected @endif value="26">Indecency</option>
				    	<option @if(old('nature_offense') == '27') selected @endif value="27">Poor sportsmanship.</option>
				    	<option @if(old('nature_offense') == '0') selected @endif value="0">Others...</option>
				    </select>
                    <div class="invalid-feedback">
                        {{ $errors->first('nature_offense') }}
                    </div>
				</div>
			</div>

			<div class="form-row">
				<div class="col">
					{{Form::label('description', 'Description', ['class' => 'col-form-label'])}}
					<input id="description" value="{{old('description')}}" type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Description">
				    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
					{{-- {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Hero to Zero'])}} --}}
				</div>
			</div>

			<div class="form-row">
				<div class="col">
					{{Form::label('grade_section', 'Grade and Section', ['class' => 'col-form-label'])}}
					<input type="text" name="grade_section" id="section" value="{{ old('grade_section') }}" class="form-control{{ $errors->has('grade_section') ? ' is-invalid' : '' }}" placeholder="Grade/Year & Section">
					<div class="invalid-feedback">
                        {{ $errors->first('grade_section') }}
					</div>
					{{-- {{Form::text('grade_section', '', ['id' => 'section', 'class' => 'form-control', 'placeholder' => 'Grade/Year & Section'])}} --}}
				</div>

				<div class="col">
				    {{Form::label('freq_offense', 'Frequency of Offense', ['class' => 'col-form-label'])}}
				    <select name="freq_offense" class="custom-select form-control{{ $errors->has('freq_offense') ? ' is-invalid' : '' }}">
				    	<option selected="selected" value>Frequency of Offense</option>
				    	<option @if(old('freq_offense') == '1') selected @endif value="1">First</option>
				    	<option @if(old('freq_offense') == '2') selected @endif value="2">Second</option>
				    	<option @if(old('freq_offense') == '3') selected @endif value="3">Third</option>
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
	$(document).ready(function(){
		// console.log($('#select').val);
		// update the description based on what the user selected on the select box
		$('#select').change(function(){
			curVal = $( "#select option:selected" ).val();

			curText = $( "#select option:selected" ).text();
			console.log("Current Value: "+curVal);
			console.log("Current Text: "+curText);
			if(curVal == 0 || curVal == null){
				var desVal = '';
			}else{
				var desVal = curText;
			}
			$('#description').val(desVal);

		});
		// check usn and finds the person with that usn
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
	});
</script>
@endsection
