<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AbsentsPDF</title>
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
				<th>Subject</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($absents as $absent)
				<tr>
					<td>{{ $absent->usn }}</td>
					<td>{{ $absent->subject }}</td>
					<td>{{ $absent->date }}</td>
				</tr>
			@endforeach
		</tbody>

	</table>
</body>
</html>