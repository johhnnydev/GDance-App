<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ViolationPDF</title>
	<style>
		body{
			font-family: sans-serif;
			font-size: 12px;
		}
		table{
			border-collapse: collapse;
			border: 1px solid black;
			table-layout: fixed;
			width: 100%; 
		}
		th,td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<table cellpadding="5">
		<thead>
			<tr>
				<th>USN</th>
				<th>Nature of Offense</th>
				<th>Frequency of Offense</th>
				<th>Sanction Given</th>
				<th>Time Issued</th>
			</tr>
		</thead>
		@foreach($violations as $violation)
			<tr>
				<td>{{ $violation->user_name }}</td>
				<td>{{ $violation->nature_offense }}</td>
				<td>{{ $violation->freq_offense }}</td>
				<td>{{ $violation->sanction_given }}</td>
				<td>{{ date("M d, Y, g:i a", strtotime($violation->created_at)) }}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>