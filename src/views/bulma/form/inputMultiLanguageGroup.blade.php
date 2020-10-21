@php

$inputLanguages = [];

foreach ($languages as $val) {
    $inputLanguages[] = [
        'name' => $name.'['.$val['id'].']',
        'value' => $value[$val['id']][$name] ?? '',
        'attributes' => $attributes,
        'title' => $val['title'],
        'id' => $val['id'],
    ];
}

@endphp

<div class="field">
  <label for="{!! $name !!}" class="label">{!! $title !!}</label>
  <p class="control">

  @if (! empty($help))
    <p class="help">{!! $help !!}</p>
  @endif

  @foreach ($inputLanguages as $val)
    <label>{!! $val['title'] !!}</label>

      {!! Form::text($val['name'], $val['value'], array_merge(['class' => 'input'], $val['attributes'])) !!}

    @if (! is_null($errors) && $errors->has($name.'['.$val['id'].']'))
      <p class="help is-danger">{!! $errors->first($name.'['.$val['id'].']') !!}</p>
    @endif
  @endforeach

  </p>
</div>
