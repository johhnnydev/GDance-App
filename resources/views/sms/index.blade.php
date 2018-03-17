@extends('layouts.app')

@section('content')
@if(session()->has('messages'))
	@foreach(session()->get('messages') as $message)
		@if($message == 0)
			<div class="alert alert-success" role="alert">
				Message Sent Successfully!
			</div>
		@else
			<div class="alert alert-danger" role="alert">
				Message Failed
			</div>
		@endif
	@endforeach
@endif
<div style="padding-left: 0px;" class="col-6">
	<div class="card border-light card-shadow">
		<div class="card-body">
		<h1 class="card-title text-primary">Message someone</h1>
			{!! Form::open(['id' => 'form', 'action' => 'smsController@send', 'method' => 'POST']) !!}
				{{ csrf_field() }}
				<div id="formGroup" class="form-group">
				</div>
				
				<button style="cursor: pointer;" id="add" type="button" class="btn btn-outline-success btn-block">Add Recipient</button>
				
				<div class="row mt-3">
					<div class="col">
						<select id="template" class="custom-select form-control">
							<option value="">Message Template</option>
							<option value="Hi, This is the guidance office of AMA Fairview and we would like to invite you to our office concerning of your son/daughter.">Hi, This is the guidance office of AMA Fairview and we would like to invite you to our office concerning of your son/daughter.</option>
							<option value="Hi this is the guidance office of AMA Fairview. Your presence is needed regarding this matter. Please stop by at my office ASAP.">Hi this is the guidance office of AMA Fairview. Your presence is needed regarding with this matter. Please stop by at my office ASAP.</option>
							<option value="Something something pending pending beep boop beep boop">Something something pending pending beep boop beep boop</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col">			
						<label class="col-form-label" for="body">Message Body</label>
						<textarea id="message" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" id="body" cols="30" rows="10" required>{{ old("body") }}</textarea>
						<div class="invalid-feedback">
	                        {{ $errors->first('body') }}
						</div>
					</div>
				</div>
				<div style="margin-top: 10px;" class="row">
					<div class="col">
						<button id="sendButton" style="width: 100%; cursor: pointer;" class="btn btn-primary">Send</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
<script>
	function addInput(){
		var divFormRow = document.createElement("div");
		divFormRow.classList.add("form-row");

		var divCol = document.createElement("div");
		divCol.classList.add("col");

		var label = document.createElement("label");
		label.classList.add("col-form-label");
		label.setAttribute("for", "recipient")
		label.innerHTML = "Receiver";
		divCol.appendChild(label);

		var inpuRecipient = document.createElement("input");
		inpuRecipient.setAttribute("type", "tel");
		inpuRecipient.setAttribute("pattern", "^(09|\\+639)\\d{9}$");
		inpuRecipient.setAttribute("title", "09 + 9 remaining numbers or +639 + 9 remaining numbers");
		inpuRecipient.setAttribute("name", "recipient[]");
		inpuRecipient.setAttribute("required", ""); 
		inpuRecipient.classList.add("form-control", "recipients");
		// inpuRecipient.addEventListener("keyup", isValid);
		divCol.appendChild(inpuRecipient);

		var divFeedback = document.createElement("div");
		divFeedback.classList.add("invalid-feedback");
		divCol.appendChild(divFeedback);

		divFormRow.appendChild(divCol)

		var divCol2 = document.createElement("div");
		divCol2.classList.add("col-2");

		var labelHidden = document.createElement("label");
		labelHidden.style.visibility = "hidden";
		labelHidden.classList.add("col-form-label");
		labelHidden.setAttribute("for", "recipient");
		labelHidden.innerHTML = "Receiver";

		divCol2.appendChild(labelHidden);

		var removeButton = document.createElement("button");
		var removeButtonContent = "<i class='fa fa-user-times' aria-hidden='true'></i> &#8203;";
		removeButton.style.cursor = "pointer";
		removeButton.setAttribute("type", "button");
		removeButton.classList.add("btn", "btn-outline-danger", "form-control");
		removeButton.innerHTML = removeButtonContent;
		removeButton.addEventListener("click", removeForm);

		divCol2.appendChild(removeButton);
		// console.log(removeButton);

		divFormRow.appendChild(divCol2);
		
		var formGrp = document.getElementById("formGroup");
		formGrp.appendChild(divFormRow);
	}

	function isRecieversValid(input){
		for (var i = 0; i < input.length; i++) {
			var regex = new RegExp("^(09|\\+639)\\d{9}$");
			if(regex.test(input[i].value)){
				if(input[i].classList.contains("is-invalid")){
					input[i].classList.remove("is-invalid");
					input[i].classList.add("is-valid");
				}else if (input[i].classList.contains("is-valid")){
				}else{
					input[i].classList.add("is-valid");
				}
			}else{
				if(input[i].classList.contains("is-valid")){
					input[i].classList.remove("is-valid");
					input[i].classList.add("is-invalid");
				}else if (input[i].classList.contains("is-invalid")){
				}else{
					input[i].classList.add("is-invalid");
				}
			}
		}

		for (var i = 0; i < input.length; i++) {
			if(input[i].classList.contains("is-invalid")){
				return false;
			}
		}

		return true;
	}

	function removeForm(e){
		var child = this.parentNode.parentNode;
		child.parentNode.removeChild(child);
	}

	function validate(e){
		var recievers = document.getElementsByClassName("recipients")
		var msg = document.getElementById("message").value;

		var recieversstatus = isRecieversValid(recievers);
		if(recieversstatus && msg){
			console.log("Submit Form");
		}else{
			console.log("Don't Submit Form");
			e.preventDefault();
			return false;
		}
	}

	function changeMessageBox(){
		var messageBox = document.getElementById("message");
		messageBox.value = this.options[this.selectedIndex].value;
		console.log(this.options[this.selectedIndex].value);
	}
	
	var messageTemplate = document.getElementById("template");
	messageTemplate.addEventListener("change", changeMessageBox);

	var addBtn = document.getElementById("add");
	addBtn.addEventListener("click", addInput);

	var sendBtn = document.getElementById("sendButton");
	sendBtn.addEventListener("click", validate);
</script>
@endsection


