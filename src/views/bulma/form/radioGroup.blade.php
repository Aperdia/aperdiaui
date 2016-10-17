<p class="control">
  <label>{!! $title !!}</label>
  {!! $text !!}

  @if (!empty($help))
    <span class="help">{!! $help !!}</span>
  @endif

  @if (!is_null($errors) && $errors->has($name))
    <span class="help is-danger">{!! $errors->first($name) !!}</span>
  @endif
</p>
