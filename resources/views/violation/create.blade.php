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
					{{Form::label('grade_section', 'Grade and Section', ['class' => 'col-form-label'])}}
					<input type="text" name="grade_section" id="section" class="form-control{{ $errors->has('grade_section') ? ' is-invalid' : '' }}" placeholder="Grade/Year & Section">
					<div class="invalid-feedback">
                        {{ $errors->first('grade_section') }}
					</div>
					{{-- {{Form::text('grade_section', '', ['id' => 'section', 'class' => 'form-control', 'placeholder' => 'Grade/Year & Section'])}} --}}
				</div>

				<div class="col">
				    {{Form::label('nature_offense', 'Nature of Offense', ['class' => 'col-form-label'])}}
				    <input placeholder="Nature of Offense" class="form-control{{ $errors->has('nature_offense') ? ' is-invalid' : '' }}" type="number" name="nature_offense" min="1" max="27">
                    <div class="invalid-feedback">
                        {{ $errors->first('nature_offense') }}
                    </div>
				    {{-- {{Form::select('nature_offense', ['1' => '1. ID 1', '2' => '2. ID 2', '3' => '3. unauthorized stay in', '4' => '4. littering', '5' => '6. unauthorized posting', '6' => '6. defamation', '7' => '7. offensive materials', '8' => '8. lewd acts', '9' => '9. stealing', '10' => '10. bribing', '11' => '11. possesion of explosive/weapon', '12' => '12. intetional misuse of school property ', '13' => '13. deceit', '14' => '14. alcohol', '15' => '15. illicit drugs', '16' => '16. lewd materials', '17' => '17. assault', '18' => '18. gambling', '19' => '19. forging school documents', '20' => '20. obstruction', '21' => '21. threat', '22' => '22. unauthorized activities', '23' => '23. unauthorized use of school name', '24' => '24. cheating', '25' => '25. abusive behavior', '26' => '26. anglabooo', '27' => '27. unsportsmanlike foul'], null, ['class' => 'form-control', 'placeholder' => 'Nature of Offense'])}} --}}
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
