<div>
  <label for="{!! $name !!}">{!! $title !!}</label>
  <div>

  @if (!empty($help))
    <span class="help-block">{!! $help !!}</span>
  @endif

  @foreach ($inputLanguages as $val)
    <div class="pull-left">{!! $val['title'] !!}</div>

      {!! $val['input'] !!}

    @if (!is_null($errors) && $errors->has($name.'['.$val['id'].']'))
      <span class="text-danger">{!! $errors->first($name.'['.$val['id'].']') !!}</span>
    @endif
  @endforeach

  </div>
</div>
