<label for="{!! $name !!}" class="label">{!! $title !!}</label>
<p class="control">

@if (!empty($help))
  <span class="help">{!! $help !!}</span>
@endif

@foreach ($inputLanguages as $val)
  <label>{!! $val['title'] !!}</label>

    {!! Form::input($val['type'], $val['name'], $val['value'], \Aperdia\AperdiaUI\Helpers::addClass($val['attributes'], 'input')) !!}

  @if (!is_null($errors) && $errors->has($name.'['.$val['id'].']'))
    <span class="help is-danger">{!! $errors->first($name.'['.$val['id'].']') !!}</span>
  @endif
@endforeach

</p>
