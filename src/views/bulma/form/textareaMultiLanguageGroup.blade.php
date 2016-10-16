<div>
  <label class="label" for="{!! $name !!}">{!! $title !!}</label>

  @if (!empty($help))
    <span class="help">{!! $help !!}</span>
  @endif

  @foreach ($languages as $language)
    <div>{!! $language['title'] !!}</div>
    {!! Form::textarea($language['name'], $language['value'], \Aperdia\AperdiaUI\Helpers::addClass($language['attributes'], 'textarea')) !!}

    @if ($language['error'])
      <span class="text-danger">{!! $language['error'] !!}</span>
    @endif
  @endforeach
</div>
