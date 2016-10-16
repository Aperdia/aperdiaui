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

   @foreach ($languages as $language)
    <div>{!! $language['title'] !!}</div>
    {!! Form::textarea($language['name'], $language['value'], \Aperdia\AperdiaUI\Helpers::addClass($language['attributes'], 'form-control')) !!}

    @if ($language['error'])
      <span class="text-danger">{!! $language['error'] !!}</span>
    @endif
  @endforeach
  </div>
</div>
