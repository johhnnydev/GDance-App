@extends('layouts.app')

@section('content')
@if(session()->has('message'))
	@if(session()->get('message') == 'Message Succesful')
	    <div class="alert alert-success">
	        {{ session()->get('message') }}
	    </div>
	@elseif((session()->get('message') == 'Message Failed'))
		<div class="alert alert-danger">
	        {{ session()->get('message') }}
	    </div>
    @endif
@endif
<div style="padding-left: 0px;" class="col-5">
	<div class="card border-light card-shadow">
		<div class="card-body">
		<h1 class="card-title text-primary">Message someone</h1>
			{!! Form::open(['id' => 'form', 'action' => 'smsController@send', 'method' => 'POST']) !!}
				{{ csrf_field() }}
				<div class="row">
					<div class="col">
						<label class="col-form-label" for="recipient">Receiver</label>
						<input type="tel" pattern="^(09|\+639)\d{9}$"  title="09 + 9 remaining numbers or +639 + 9 remaining numbers" name="recipient" class="form-control{{ $errors->has('recipient') ? ' is-invalid' : '' }}" required>
							<div class="invalid-feedback">
                        {{ $errors->first('recipient') }}
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col">			
						<label class="col-form-label" for="body">Message Body</label>
						<textarea class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" id="body" cols="30" rows="10" required></textarea>
						<div class="invalid-feedback">
	                        {{ $errors->first('body') }}
						</div>
					</div>
				</div>
				<div style="margin-top: 10px;" class="row">
					<div class="col">
						<button style="width: 100%; cursor: pointer;" class="btn btn-primary">Send</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection


