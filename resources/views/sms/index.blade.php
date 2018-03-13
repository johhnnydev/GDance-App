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
<div style="padding-left: 0px;" class="col-6">
	<div class="card border-light card-shadow">
		<div class="card-body">
		<h1 class="card-title text-primary">Message someone</h1>
			{!! Form::open(['id' => 'form', 'action' => 'smsController@send', 'method' => 'POST']) !!}
				{{ csrf_field() }}
				<div id="har" class="form-group">
					<div class="form-row">
						<div class="col">
							<label class="col-form-label" for="recipient">Receiver</label>
							<input type="tel" pattern="^(09|\+639)\d{9}$"  title="09 + 9 remaining numbers or +639 + 9 remaining numbers" name="recipient[]" class="form-control{{ $errors->has('recipient') ? ' is-invalid' : '' }}" required>
							<div class="invalid-feedback">
								{{ $errors->first('recipient') }}
							</div>
						</div>
						<div class="col-2">
							<label style="visibility: hidden;" class="col-form-label" for="recipient">Receiver</label>
							<button style="cursor: pointer;" type="button" class="btn btn-outline-danger form-control del"><i class="fa fa-user-times" aria-hidden="true"></i> &#8203;</button>
						</div>
					</div>
				</div>

				<button style="cursor: pointer;" id="add" type="button" class="btn btn-outline-success btn-block">Add</button>
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
<script>
	$(function(){
		var things = "<div class='form-row'><div class='col'> 						<label class='col-form-label' for='recipient'>Receiver</label> 						<input type='tel' pattern='^(09|\+639)\d{9}$'  title='09 + 9 remaining numbers or +639 + 9 remaining numbers' name='recipient[]' class='form-control{{ $errors->has('recipient') ? ' is-invalid' : '' }}' required> 						<div class='invalid-feedback'> 							{{ $errors->first('recipient') }} 						</div> 					</div><div class='col-2'> 						<label style='visibility: hidden;' class='col-form-label' for='recipient'>Receiver</label> 						<button id='del' style='cursor: pointer;' type='button' class='btn btn-outline-danger form-control del'><i class='fa fa-user-times' aria-hidden='true'></i> &#8203;</button> 					</div></div>";
		$("#add").click(function(e){
			e.preventDefault();	
			$("#har").append(things);
			console.log("add was clicked");
		});

		$(document).on("click", ".del", function(e){
			e.preventDefault();
			$(this).parent().parent().remove()
			console.log("del was clicked");
		});
	});
</script>
@endsection


