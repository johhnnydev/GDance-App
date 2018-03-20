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
		<h1 class="text-primary">Edit Violation</h1>
		{!! Form::open(['id' => 'form', 'action' => ['ViolationController@update', $violation->id], 'method' => 'POST']) !!}
		{{ csrf_field() }}
		<div class="form-row">			
			<div class="col">
				{{Form::label('usn', 'USN', ['class' => 'col-form-label'])}}
				<input type="number" name="usn" class="form-control{{ $errors->has('usn') ? ' is-invalid' : '' }}" placeholder="USN" id="usn" value="{{ $violation->user_name }}">
				<div class="invalid-feedback">
                    {{ $errors->first('usn') }}
                </div>
			</div>
			<div class="col">
					{{Form::label('grade_section', 'Grade and Section', ['class' => 'col-form-label'])}}
					<input type="text" name="grade_section" id="section" class="form-control{{ $errors->has('grade_section') ? ' is-invalid' : '' }}" placeholder="Grade/Year & Section" value="{{ $violation->grade_section }}">
					<div class="invalid-feedback">
                        {{ $errors->first('grade_section') }}
					</div>
			</div>

			<div class="col">
			    {{Form::label('freq_offense', 'Frequency of Offense', ['class' => 'col-form-label'])}}
			    <select name="freq_offense" class="custom-select form-control{{ $errors->has('freq_offense') ? ' is-invalid' : '' }}">
			    	<option selected="selected" value>Frequency of Offense</option>

			    	<option {{ $violation->freq_offense == '1' ? 'selected ' : '' }} value="1">First</option>
			    	<option {{ $violation->freq_offense == '2' ? 'selected ' : '' }} value="2">Second</option>
			    	<option {{ $violation->freq_offense == '3' ? 'selected ' : '' }} value="3">Third</option>
			    </select>
			    <div class="invalid-feedback">
                    {{ $errors->first('freq_offense') }}
                </div>
			</div>
		</div>

		<div class="form-row">
				<div class="col">
				    {{Form::label('nature_offense', 'Nature of Offense', ['class' => 'col-form-label'])}}
				    {{-- <input placeholder="Nature of Offense" class="form-control{{ $errors->has('nature_offense') ? ' is-invalid' : '' }}" type="number" name="nature_offense" min="1" max="27"> --}}
					<select id="select" name="nature_offense" class="custom-select form-control{{ $errors->has('nature_offense') ? ' is-invalid' : '' }}">
				    	<option selected="selected" value>Nature of Offense</option>
				    	<option {{ $violation->nature_offense == '1' ? 'selected ' : '' }} value="1">Failing to proper wear valid ID card while inside the school.</option>
				    	<option {{ $violation->nature_offense == '2' ? 'selected ' : '' }} value="2">Using for official school purposes or transaction own ID card, which is neither authorized nor valid.</option>
				    	<option {{ $violation->nature_offense == '3' ? 'selected ' : '' }} value="3">Unauthorized stay in, or entry to the school after 9:00 PM.</option>
				    	<option {{ $violation->nature_offense == '4' ? 'selected ' : '' }} value="4">Littering</option>
				    	<option {{ $violation->nature_offense == '5' ? 'selected ' : '' }} value="5">Unauthorized posting/distributing of leaflets, posters, questionnaires, surveys or similar materials.</option>
				    	<option {{ $violation->nature_offense == '6' ? 'selected ' : '' }} value="6">Defamation</option>
				    	<option {{ $violation->nature_offense == '7' ? 'selected ' : '' }} value="7">Possession of material that is offensive to morals, contrary to law, public order, good custom, and school policies.</option>
				    	<option {{ $violation->nature_offense == '8'? 'selected ' : '' }} value="8">Engaging in lewd, indecent, obscene, immoral or provocative conduct.</option>
				    	<option {{ $violation->nature_offense == '9'? 'selected ' : '' }} value="9">Stealing</option>
				    	<option {{ $violation->nature_offense == '10' ? 'selected ' : '' }} value="10">Bribery</option>
				    	<option {{ $violation->nature_offense == '11' ? 'selected ' : '' }} value="11">Possession of dangerous stuff.</option>
				    	<option {{ $violation->nature_offense == '12' ? 'selected ' : '' }} value="12">Destruction of property.</option>
				    	<option {{ $violation->nature_offense == '13' ? 'selected ' : '' }} value="13">Deceit</option>
				    	<option {{ $violation->nature_offense == '14' ? 'selected ' : '' }} value="14">Possession of alcoholic beverages; entering the school in a state of intoxication.</option>
				    	<option {{ $violation->nature_offense == '15' ? 'selected ' : '' }} value="15">Using, possessing, or distributing illicit drugs.</option>
				    	<option {{ $violation->nature_offense == '16' ? 'selected ' : '' }} value="16">Possessing, distributing or selling cpoies of offensive, obscene, or harrasing magazines.</option>
				    	<option {{ $violation->nature_offense == '17' ? 'selected ' : '' }} value="17">Assault</option>
				    	<option {{ $violation->nature_offense == '18' ? 'selected ' : '' }} value="18">Gambling</option>
				    	<option {{ $violation->nature_offense == '19' ? 'selected ' : '' }} value="19">Forgery</option>
				    	<option {{ $violation->nature_offense == '20' ? 'selected ' : '' }} value="20">Obstruction</option>
				    	<option {{ $violation->nature_offense == '21' ? 'selected ' : '' }} value="21">Threat</option>
				    	<option {{ $violation->nature_offense == '22' ? 'selected ' : '' }} value="22">Unauthorized use of school facility.</option>
				    	<option {{ $violation->nature_offense == '23' ? 'selected ' : '' }} value="23">Unauthorized use of school's name.</option>
				    	<option {{ $violation->nature_offense == '24' ? 'selected ' : '' }} value="24">Cheating</option>
				    	<option {{ $violation->nature_offense == '25' ? 'selected ' : '' }} value="25">Abusive behavior</option>
				    	<option {{ $violation->nature_offense == '26' ? 'selected ' : '' }} value="26">Indecency</option>
				    	<option {{ $violation->nature_offense == '27' ? 'selected ' : '' }} value="27">Poor sportsmanship.</option>
				    	<option {{ $violation->nature_offense == '0' ? 'selected ' : '' }} value="0">Others...</option>
				    </select>
                    <div class="invalid-feedback">
                        {{ $errors->first('nature_offense') }}
                    </div>
				</div>
			</div>
			<div class="form-row">		
				<div class="col-md-12">
					{{Form::label('description', 'Description', ['class' => 'col-form-label'])}}
					<input id="description" type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="description" value="{{ $violation->description }}">
					<div class="invalid-feedback">
						{{ $errors->first('description') }}
					</div>
				</div>
			</div>
			<div class="form-row vio-border">		
				<div class="col-md-12">
					{{Form::label('sanction_given', 'Sanction Given', ['class' => 'col-form-label'])}}
					<input type="text" name="sanction_given" class="form-control{{ $errors->has('sanction_given') ? ' is-invalid' : '' }}" placeholder="Sanction given" value="{{ $violation->sanction_given }}">
				    <div class="invalid-feedback">
                        {{ $errors->first('sanction_given') }}
                    </div>
				</div>
			</div>
		{{-- hack and simulate don't remove--}}
		{{Form::hidden('_method', 'PUT')}}
		<a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>		
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}          
		{!! Form::close() !!}
	</div>
</div>
<script>
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
</script>
@endsection