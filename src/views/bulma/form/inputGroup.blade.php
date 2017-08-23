<div class="field">
@if ($title)
  {!! Form::label($name, $title, ['class' => 'label']) !!}
@endif

  <div class="control">
    {!! Form::input($type, $name, $value, \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'input')) !!}

    @if (!empty($help))
      <p class="help">{!! $help !!}</p>
    @endif

    @if (!is_null($errors) && $errors->has($name))
      <p class="help is-danger">{!! $errors->first($name) !!}</p>
    @endif
  </div>
</div>
