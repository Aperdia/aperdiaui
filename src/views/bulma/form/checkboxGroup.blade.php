<div class="field">
  <p class="control">
    <label class="checkbox">
      {!! Form::checkbox($name, $value, ($input == $value), $attributes) !!}
      {!! $title !!}
    @if (! empty($help))
      <p class="help">{!! $help !!}</p>
    @endif
    @if (! is_null($errors) && $errors->has($name))
      <p class="help is-danger">{!! $errors->first($name) !!}</p>
    @endif
    </label>
  </p>
</div>
