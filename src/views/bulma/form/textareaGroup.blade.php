@if ($title)
  {!! Form::label($name, $title, ['class' => 'label']) !!}
@endif

<p class="control">
  {!! Form::textarea($name, $value, \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'textarea')) !!}

  @if (!empty($help))
    <p class="help">{!! $help !!}</p>
  @endif

  @if (!is_null($errors) && $errors->has($name))
    <p class="help is-danger">{!! $errors->first($name) !!}</p>
  @endif
</p>
