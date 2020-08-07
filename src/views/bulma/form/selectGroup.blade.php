<div class="field">
@if ($title)
  {!! Form::label($name, $title, ['class' => 'label']) !!}
@endif

  <p class="control">
    <div class="select">
      {!! Form::select($name, $list, $value, $attributes) !!}
    </div>
    @if (! empty($help))
      <p class="help">{!! $help !!}</p>
    @endif

    @if (! is_null($errors) && $errors->has($name))
      <p class="help is-danger">{!! $errors->first($name) !!}</p>
    @endif
  </p>
</div>
