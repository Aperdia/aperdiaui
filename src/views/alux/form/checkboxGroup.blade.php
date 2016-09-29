<label class="checkbox-input">
  {!! $text !!}
  <span class="label-body">{!! $title !!}</span>
@if (!empty($help))
  <span class="help-block">{!! $help !!}</span>
@endif

@if (!is_null($errors) && $errors->has($name))
  <span class="text-danger">{!! $errors->first($name) !!}</span>
@endif
</label>
