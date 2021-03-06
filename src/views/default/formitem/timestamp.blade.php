<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
	<label for="{{ $name }}" @if($label_size) class="{{ $label_size }}" @endif >
		{{ $label }}
		@if($required_field)
			@include(AdminTemplate::view('formitem.required'))
    	@endif
    </label>
    @if($field_size)
    	<div class="{{ $field_size }}">
    @endif
	<div class="datepicker input-group">
		<input data-date-format="{{ $pickerFormat }}" data-date-useseconds="{{ $seconds ? 'true' : 'false' }}" class="form-control" name="{{ $name }}" type="text" id="{{ $name }}" value="{{ $value }}">
		<div class="input-group-addon"><span class="fa fa-clock-o"></span></div>
	</div>
	@include(AdminTemplate::view('formitem.help'))
	@include(AdminTemplate::view('formitem.errors'))
	@if($field_size)
    	</div>
    @endif
</div>