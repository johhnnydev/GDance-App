@extends('layouts.app')
@section('content')
<h1>Violations</h1>
<table class="table table-responsive table-striped">
	<thead class="thead">
		<tr>
			<td><b>usn</b></td>
			<td><b>Grade and Section/Year and Course</b></td>
			<td><b>Nature of Offense</b></td>
			<td><b>Frequency of Offense</b></td>
			<td><b>Sanction Given</b></td>
		</tr>
	</thead>
	<tbody>
	@foreach($violations as $violation)
		<tr>

			<td>{{ $violation->user_name }}</td>
			<td>{{ $violation->grade_section }}</td>
			<td>{{ $violation->nature_offense }}</td>
			<td>{{ $violation->freq_offense }}</td>
			<td>{{ $violation->sanction_given }}</td>
		</tr>
	@endforeach		
	</tbody>
</table>
@endsection