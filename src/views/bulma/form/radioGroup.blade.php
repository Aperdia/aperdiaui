<div class="field">
  <p class="control">
    <label>{!! $title !!}</label>
    {!! $text !!}

    @if (!empty($help))
      <p class="help">{!! $help !!}</p>
    @endif

    @if (!is_null($errors) && $errors->has($name))
      <p class="help is-danger">{!! $errors->first($name) !!}</p>
    @endif
  </p>
</div>
