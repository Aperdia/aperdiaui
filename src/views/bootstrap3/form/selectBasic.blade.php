@if (!is_null($errors) && $errors->has($name))
  <div class="form-group has-error">
@else
  <div class="form-group">
@endif

  <label for="{!! $name !!}">{!! $title !!}</label>

  {!! Form::input($type, $name, $value, \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'form-control')) !!}

@if (!empty($help))
  <span class="help-block">{!! $help !!}</span>
@endif

@if (!is_null($errors) && $errors->has($name))
  <span class="text-danger">{!! $errors->first($name) !!}</span>
@endif

</div>
