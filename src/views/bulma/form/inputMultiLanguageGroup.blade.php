<label for="{!! $name !!}">{!! $title !!}</label>
<p class="control">

@if (!empty($help))
  <span class="help">{!! $help !!}</span>
@endif

@foreach ($inputLanguages as $val)
  <div class="pull-left">{!! $val['title'] !!}</div>

    {!! $val['input'] !!}

  @if (!is_null($errors) && $errors->has($name.'['.$val['id'].']'))
    <span class="help is-danger">{!! $errors->first($name.'['.$val['id'].']') !!}</span>
  @endif
@endforeach

</div>
