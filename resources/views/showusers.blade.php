@extends('layouts.app')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="card border-light card-shadow">
	<div class="card-body">
		<h1>All Users <small><a href="/register">Add User</a></small></h1>
		<table class="table table-responsive">
			<thead class="thead-dark">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				{{--  show delete button if user is Superadmin else don't  --}}
				@if(Auth::user()->is_admin == 2)
					@foreach($users as $user)
						<tr>
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
								{!! Form::open(['id' => 'form', 'action' => ['usersController@deleteUser', $user->id], 'method' => 'POST', 'onsubmit' => 'return confirm("Are you sure you really want to delete the user?");']) !!}
									{{Form::hidden('_method', 'DELETE')}}
									{{Form::submit('Delete User', ['class' => 'cursor-h btn btn-danger btn-sm'])}}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				@else
					@foreach($users as $user)
						<tr>
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
							</td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
		{{ $users->links() }}
	</div>
</div>
@endsection