@extends('layouts.app')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<h1>All Users <small><a href="/register">Add User</a></small></h1>
<table class="table table-responsive table-striped">
	<thead>
		<tr>
			<td>#</td>
			<td>Name</td>
			<td>Email</td>
			<td>Role</td>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ ucfirst($user->name) }}</td>
			<td>{{ $user->email }}</td>
			@if($user->is_admin == 0)
				<td>Student</td>
			@elseif($user->is_admin == 1)
				<td>Admin</td>
			@endif
		</tr>
	@endforeach
	</tbody>
</table>
{{ $users->links() }}
@endsection