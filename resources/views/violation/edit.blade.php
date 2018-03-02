@extends('layouts.app')
@section('content')
<div class="container">
	<h1>Add Violation</h1>
	{!! Form::open(['id' => 'form', 'action' => ['ViolationController@update', $about->id], 'method' => 'POST']) !!}
		{{ csrf_field() }}
		<div class="form-group row">
			<div class="col-xs-3{{ $errors->has('user_name') ? ' has-error' : '' }}">
				{{Form::label('user_name', 'Name')}}
				<input type="text" class="form-control" name="searchname" id="searchname" placeholder="Search">
				<small class="text-danger">{{ $errors->first('user_name') }}</small>
			</div>
			<div class="col-xs-3{{ $errors->has('grade_section') ? ' has-error' : '' }}">
				{{Form::label('grade_section', 'Grade and Section')}}
				{{Form::text('grade_section', '', ['class' => 'form-control', 'placeholder' => '12 Rose'])}}
				<small class="text-danger">{{ $errors->first('grade_section') }}</small>
			</div>
			<div class="col-xs-4{{ $errors->has('nature_offense') ? ' has-error' : '' }}">
			    {{Form::label('nature_offense', 'Nature of Offense')}}
			    {{Form::select('nature_offense', ['1' => '1. ID 1', '2' => '2. ID 2', '3' => '3. unauthorized stay in', '4' => '4. littering', '5' => '6. unauthorized posting', '6' => '6. defamation', '7' => '7. offensive materials', '8' => '8. lewd acts', '9' => '9. stealing', '10' => '10. bribing', '11' => '11. possesion of explosive/weapon', '12' => '12. intetional misuse of school property ', '13' => '13. deceit', '14' => '14. alcohol', '15' => '15. illicit drugs', '16' => '16. lewd materials', '17' => '17. assault', '18' => '18. gambling', '19' => '19. forging school documents', '20' => '20. obstruction', '21' => '21. threat', '22' => '22. unauthorized activities', '23' => '23. unauthorized use of school name', '24' => '24. cheating', '25' => '25. abusive behavior', '26' => '26. anglabooo', '27' => '27. unsportsmanlike foul'], null, ['class' => 'form-control', 'placeholder' => 'Nature of Offense'])}}
			    <small class="text-danger">{{ $errors->first('nature_offense') }}</small>
			</div>
			<div class="col-xs-2{{ $errors->has('freq_offense') ? ' has-error' : '' }}">
			    {{Form::label('freq_offense', 'Frequency of Offense')}}
			    {{Form::select('freq_offense', ['1' => 'First', '2' => 'Second', '3' => 'Third'], null, ['class' => 'form-control', 'placeholder' => 'Nature of Offense'])}}
			    <small class="text-danger">{{ $errors->first('freq_offense') }}</small>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-xs-12{{ $errors->has('sanction_given') ? ' has-error' : '' }}">
				{{Form::label('sanction_given', 'Sanction Given')}}
				{{Form::text('sanction_given', '', ['class' => 'form-control', 'placeholder' => 'Hero to Zero'])}}
				<small class="text-danger">{{ $errors->first('sanction_given') }}</small>
			</div>
		</div>

	{{-- hack and simulate don't remove--}}
    {{Form::hidden('_method', 'PUT')}}

	<div style="margin-bottom: 10px;">
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	</div>           
	{!! Form::close() !!}

</div>
<script type="text/javascript">
	$( function() {
	    $( "#searchname" ).autocomplete({
	      source: '{{ asset('autocomplete') }}'
    });
  } );
</script>
@endsection