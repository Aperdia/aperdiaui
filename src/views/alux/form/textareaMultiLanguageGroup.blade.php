<div>
  <label for="{!! $name !!}">{!! $title !!}</label>

  @if (!empty($help))
    <span class="help-block">{!! $help !!}</span>
  @endif

    {!! $text !!}
</div>
