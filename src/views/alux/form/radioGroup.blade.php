<div>
  <label>{!! $title !!}</label>
    {!! $text !!}

  @if (!empty($help))
    <span class="help-block">{!! $help !!}</span>
  @endif

  @if (!is_null($errors) && $errors->has($name))
    <span class="text-danger">{!! $errors->first($name) !!}</span>
  @endif
</div>