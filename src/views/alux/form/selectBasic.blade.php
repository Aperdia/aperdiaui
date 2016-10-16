<div>
  <label for="{!! $name !!}">{!! $title !!}</label>

  {!! Form::select($name, $list, $value, \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'form-control')) !!}

@if (!empty($help))
  <span class="help-block">{!! $help !!}</span>
@endif

@if (!is_null($errors) && $errors->has($name))
  <span class="text-danger">{!! $errors->first($name) !!}</span>
@endif

</div>
