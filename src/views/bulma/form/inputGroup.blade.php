@if ($label)
  {!! Form::label($name, $title) !!}
@endif

<p class="control">
  {!! $text !!}

  @if (!empty($help))
    <p><span class="help">{!! $help !!}</span></p>
  @endif

  @if (!is_null($errors) && $errors->has($name))
    <span class="help is-danger">{!! $errors->first($name) !!}</span>
  @endif
</p>
