@extends('layouts.app')
@section('content')
	<div class="card border-light card-shadow">
		<div class="card-body">
			<h1 class="text-primary">Download as Excel</h1>
			<form method="POST" action="/report">
				{{ csrf_field() }}
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="nature_offense">Nature of Offense</label>
						<input type="number" name="nature_offense" class="form-control{{ $errors->has('nature_offense') ? ' is-invalid' : '' }}" placeholder="Nature of offense" max="27">
						<div class="invalid-feedback">{{ $errors->first('nature_offense') }}</div>
					</div>
					
					<div class="form-group col-md-3">
						<label for="freq_offense">Frequency of Offense</label>
						<select name="freq_offense" class="custom-select form-control{{ $errors->has('freq_offense') ? ' is-invalid' : '' }}">
							<option selected="selected" value>Frequency of offense</option>
							<option value="1">First</option>
							<option value="2">Second</option>
							<option value="3">Third</option>
						</select>
						<div class="invalid-feedback">{{ $errors->first('freq_offense') }}</div>
					</div>

					<div class="form-group col-md-2">
						<label for="year">Year</label>
						<input type="number" name="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" placeholder="Year" min="1900" max="9999">
						<div class="invalid-feedback">{{ $errors->first('year') }}</div>
					</div>

					<div class="form-group col-md-2">
						<label for="month">Month</label>
						<select name="month" class="custom-select form-control{{ $errors->has('month') ? ' is-invalid' : '' }}">
							<option selected="selected" value>Month</option>
							<option value="1">January</option>
							<option value="2">February</option
>							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
						<div class="invalid-feedback">{{ $errors->first('month') }}</div>
					</div>

					<div class="form-group col-md-2">
						<label style="visibility: hidden;">hidden</label>
						<input style="cursor: pointer;" type="submit" value="Download Excel" class="btn btn-success form-control">
					</div>
				</div>				
			</form>
		</div>
	</div>

	<div class="card border-light card-shadow">
		<div class="card-body">
			<h1 class="text-primary">Download as PDF</h1>
			<form method="POST" action="/reportpdf">
				{{ csrf_field() }}
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="nature_offense">Nature of Offense</label>
						<input type="number" name="nature_offense" class="form-control{{ $errors->has('nature_offense') ? ' is-invalid' : '' }}" placeholder="Nature of offense" max="27">
						<div class="invalid-feedback">{{ $errors->first('nature_offense') }}</div>
					</div>
					
					<div class="form-group col-md-3">
						<label for="freq_offense">Frequency of Offense</label>
						<select name="freq_offense" class="custom-select form-control{{ $errors->has('freq_offense') ? ' is-invalid' : '' }}">
							<option selected="selected" value>Frequency of offense</option>
							<option value="1">First</option>
							<option value="2">Second</option>
							<option value="3">Third</option>
						</select>
						<div class="invalid-feedback">{{ $errors->first('freq_offense') }}</div>
					</div>

					<div class="form-group col-md-2">
						<label for="year">Year</label>
						<input type="number" name="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" placeholder="Year" min="1900" max="9999">
						<div class="invalid-feedback">{{ $errors->first('year') }}</div>
					</div>

					<div class="form-group col-md-2">
						<label for="month">Month</label>
						<select name="month" class="custom-select form-control{{ $errors->has('month') ? ' is-invalid' : '' }}">
							<option selected="selected" value>Month</option>
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
						<div class="invalid-feedback">{{ $errors->first('month') }}</div>
					</div>

					<div class="form-group col-md-2">
						<label style="visibility: hidden;">hidden</label>
						<input style="cursor: pointer;" type="submit" value="Download PDF" class="btn btn-danger form-control">
					</div>
				</div>				
			</form>
		</div>
	</div>
@endsection