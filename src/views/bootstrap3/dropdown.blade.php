<div{!! HTML::attributes($attributes) !!}>
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
    data-toggle="dropdown" aria-expanded="true">
    {!! $title !!}
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
@foreach ($elements as $element)
  @if ($element['type'] === 'link')
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="{!! $element['link'] !!}">
        {!! $element['title'] !!}
      </a>
    </li>
  @elseif ($element['type'] === 'disabled')
    <li role="presentation" class="disabled">
      <a role="menuitem" tabindex="-1" href="#">
        {!! $element['title'] !!}
      </a>
    </li>
  @elseif ($element['type'] === 'header')
    <li role="presentation" class="dropdown-header">{!! $element['title'] !!}</li>
  @elseif ($element['type'] === 'divider')
    <li role="presentation" class="divider"></li>
  @endif
@endforeach
  </ul>
</div>
