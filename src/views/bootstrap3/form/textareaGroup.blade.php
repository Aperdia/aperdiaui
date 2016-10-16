@if (!is_null($errors) && $errors->has($name))
  <div class="form-group has-error">
@else
  <div class="form-group">
@endif

  <label for="{!! $name !!}" class="col-md-2 control-label">{!! $title !!}</label>

  <div class="col-md-10">

    {!! Form::textarea($name, $value, \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'form-control')) !!}

  @if (!empty($help))
    <span class="help-block">{!! $help !!}</span>
  @endif

  @if (!is_null($errors) && $errors->has($name))
    <span class="text-danger">{!! $errors->first($name) !!}</span>
  @endif

  </div>

</div>
