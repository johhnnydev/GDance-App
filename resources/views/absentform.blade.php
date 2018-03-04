@extends('layouts.app')
@section('content')
	<div class="card border-light card-shadow">
		<div class="card-body">
			<h1 class="text-primary">Absent Report</h1>
			<form method="POST" action"/absentreport">
				{{ csrf_field() }}
				<div class="form-row">
					<div class="form-group col">
						<label for="usn">USN</label>
						<input type="number" name="usn" class="form-control{{ $errors->has('usn') ? ' is-invalid' : '' }}" placeholder="usn">
						<div class="invalid-feedback">{{ $errors->first('usn') }}</div>
					</div>
					
					<div class="form-group col">
						<label for="subject">Subject</label>
						<input type="text" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="subject">
						<div class="invalid-feedback">{{ $errors->first('subject') }}</div>
					</div>

					<div class="form-group col">
						<label for="from">From</label>
						<input type="date" name="from" class="form-control{{ $errors->has('from') ? ' is-invalid' : '' }}" placeholder="from">
						<div class="invalid-feedback">{{ $errors->first('from') }}</div>
					</div>

					<div class="form-group col">
						<label for="to">To</label>
						<input type="date" name="to" class="form-control{{ $errors->has('to') ? ' is-invalid' : '' }}" placeholder="to">
						<div class="invalid-feedback">{{ $errors->first('to') }}</div>
					</div>
					
					<div class="form-group col-md-2">
						<label style="visibility: hidden;">hidden</label>
						<input style="cursor: pointer;" type="submit" class="btn btn-primary form-control">
					</div>
				</div>				
			</form>
		</div>
	</div>
@endsection