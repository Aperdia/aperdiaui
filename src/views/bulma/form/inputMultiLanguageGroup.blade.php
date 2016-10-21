<label for="{!! $name !!}" class="label">{!! $title !!}</label>
<p class="control">

@if (!empty($help))
  <p class="help">{!! $help !!}</p>
@endif

@foreach ($inputLanguages as $val)
  <label>{!! $val['title'] !!}</label>

    {!! Form::input($val['type'], $val['name'], $val['value'], \Aperdia\AperdiaUI\Helpers::addClass($val['attributes'], 'input')) !!}

  @if (!is_null($errors) && $errors->has($name.'['.$val['id'].']'))
    <p class="help is-danger">{!! $errors->first($name.'['.$val['id'].']') !!}</p>
  @endif
@endforeach

</p>
