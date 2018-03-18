@extends('layouts.app')

@section('content')
@foreach ($errors as $error)
    <li>{{ $error }}</li>
@endforeach
<div class="card border-light card-shadow">
    <div class="card-body">
        <h1 class="card-title text-primary">Register a user</h1>
        <form style="margin-bottom: 0px;" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-row">
                <div class="col">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  autofocus>
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                </div>

                <div class="col">
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="is_admin">User Role</label>                                
                        <select name="is_admin" class="custom-select form-control{{ $errors->has('is_admin') ? ' is-invalid' : '' }}">
                            <option selected="selected" value>User Role</option>
                            <option value="2">Super Admin</option>
                            <option value="1">Admin</option>
                            <option value="0">Student</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('is_admin') }}
                        </div>
                    </div>
                </div> {{-- col --}}

            </div> {{-- form-row --}}

            <div class="form-row">
                <div class="col">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>

                <div class="col">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" >
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>
            </div>

            <div style="margin-top: 15px;" class="form-row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection


