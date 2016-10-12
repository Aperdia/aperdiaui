<div>
  <label for="{!! $name !!}">{!! $title !!}</label>

  @if (!empty($help))
    <span class="help">{!! $help !!}</span>
  @endif

    {!! $text !!}
</div>
