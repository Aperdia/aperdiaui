<div class="field">
  <label class="label" for="{!! $name !!}">{!! $title !!}</label>

  @if (!empty($help))
    <p class="help">{!! $help !!}</p>
  @endif

  @foreach ($languages as $language)
    <div>{!! $language['title'] !!}</div>
    {!! Form::textarea($language['name'], $language['value'], \Aperdia\AperdiaUI\Helpers::addClass($language['attributes'], 'textarea')) !!}

    @if ($language['error'])
      <p class="text-danger">{!! $language['error'] !!}</p>
    @endif
  @endforeach
</div>
