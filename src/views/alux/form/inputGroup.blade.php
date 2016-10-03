<div>
@if ($label)
  {!! Form::label($name, $title) !!}
@endif
  {!! $text !!}

@if (!empty($help))
  <p><span class="help-block">{!! $help !!}</span></p>
@endif

@if (!is_null($errors) && $errors->has($name))
  <span class="text-danger">{!! $errors->first($name) !!}</span>
@endif
</div>
