@if ($title)
  {!! Form::label($name, $title, ['class' => 'label']) !!}
@endif

<p class="control">
  {!! Form::textarea($name, $value, \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'textarea')) !!}

  @if (!empty($help))
    <p><span class="help">{!! $help !!}</span></p>
  @endif

  @if (!is_null($errors) && $errors->has($name))
    <span class="help is-danger">{!! $errors->first($name) !!}</span>
  @endif
</p>