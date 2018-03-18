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
			<td></td>
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
			@elseif($user->is_admin == 2)
				<td>Superadmin</td>		
			@endif
			<td>
				{!! Form::open(['id' => 'form', 'action' => ['usersController@deleteUser', $user->id], 'method' => 'POST']) !!}
					{{Form::hidden('_method', 'DELETE')}}
					{{Form::submit('Delete', ['class' => 'cursor-h btn btn-danger btn-sm'])}}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
{{ $users->links() }}
@endsection