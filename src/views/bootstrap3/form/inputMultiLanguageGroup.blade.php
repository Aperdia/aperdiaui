@if (!is_null($errors) && $errors->has($name))
  <div class="form-group has-error">
@else
  <div class="form-group">
@endif

  <label for="{!! $name !!}" class="col-md-2 control-label">{!! $title !!}</label>
  <div class="col-md-10">

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
