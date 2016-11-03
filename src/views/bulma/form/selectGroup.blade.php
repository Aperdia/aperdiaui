@if ($title)
  {!! Form::label($name, $title, ['class' => 'label']) !!}
@endif

<p class="control">
  <span class="select">
    {!! Form::select($name, $list, $value, $attributes) !!}
  </span>
  @if (!empty($help))
    <p class="help">{!! $help !!}</p>
  @endif

  @if (!is_null($errors) && $errors->has($name))
    <p class="help is-danger">{!! $errors->first($name) !!}</p>
  @endif
</p>
