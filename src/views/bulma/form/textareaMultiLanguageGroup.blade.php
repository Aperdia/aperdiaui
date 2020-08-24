@php

$attributes['rows'] = 5;

$translation = [];

foreach ($languages as $val) {
    $value_tmp = Request::old($name.'['.$val['id'].']') ?? $value[$val['id']][$name] ?? '';

    $error = '';
    if (! is_null($errors) && $errors->has($name.'['.$val['id'].']')) {
        $error = $errors->first($name.'['.$val['id'].']');
    }

    $translation[] = [
        'title' => $val['title'],
        'name' => $name.'['.$val['id'].']',
        'value' => $value_tmp,
        'attributes' => $attributes,
        'error' => $error,
    ];
}

@endphp

<div class="field">
  <label class="label" for="{!! $name !!}">{!! $title !!}</label>

  @if (! empty($help))
    <p class="help">{!! $help !!}</p>
  @endif

  @foreach ($translation as $language)
    <div>{!! $language['title'] !!}</div>
    {!! Form::textarea($language['name'], $language['value'], array_merge(['class' => 'textarea'], $attributes)) !!}

    @if ($language['error'])
      <p class="text-danger">{!! $language['error'] !!}</p>
    @endif
  @endforeach
</div>
