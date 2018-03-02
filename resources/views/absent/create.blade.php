@extends('layouts.app')
@section('content')
@if(session()->has('message'))
	@if(session()->get('message') == 'Successful')
		<div class="alert alert-success">
			Added absent successfully.
		</div>
	@else
		<div class="alert alert-danger">
			Something went wrong. Please try again.
		</div>
	@endif
@endif
<div class="card border-light card-shadow">
	<div class="card-body">
		<h1 class="text-primary">Add Absent</h1>
		{!! Form::open(['id' => 'form', 'action' => 'AbsentController@store', 'method' => 'POST']) !!}
			{{ csrf_field() }}

			<div class="form-row vio-border">			
				<div class="col">
					{{Form::label('usn', 'USN')}}
					<input type="number" name="usn" class="form-control{{ $errors->has('usn') ? ' is-invalid' : '' }}" placeholder="USN" id="usn">
					<div class="invalid-feedback">
                        {{ $errors->first('usn') }}
                    </div>
				</div>
				<div class="col">
					{{Form::label('subject', 'Subject')}}
					<input type="text" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="Subject">
					<div class="invalid-feedback">
                        {{ $errors->first('subject') }}
                    </div>
				</div>
				<div class="col">
					{{Form::label('date', 'Date')}}
					<input type="date" name="date" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}">
					<div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
				</div>
			</div>
            <input class="btn btn-primary" style="cursor: pointer;" type="submit" value="submit">
		{!! Form::close() !!}
	</div>
</div>
@endsection