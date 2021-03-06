@php
  $attributes = Aperdia\AperdiaUI\Helpers::addClass($attributes, 'switch is-rounded is-outlined');
  $attributes = Aperdia\AperdiaUI\Helpers::addClass($attributes, $name, 'id');
@endphp

<div class="field">
  {!! Form::checkbox($name, $value, ($input == $value), $attributes) !!}
  <label for="{!! $name !!}">{!! $title !!}</label>
  @if (!empty($help))
    <p class="help">{!! $help !!}</p>
  @endif
  @if (!is_null($errors) && $errors->has($name))
    <p class="help is-danger">{!! $errors->first($name) !!}</p>
  @endif
</div>
