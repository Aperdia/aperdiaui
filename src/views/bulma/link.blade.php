@foreach ($elements as $element)
  @if ($element['type'] === 'divider')
    <br><br>
  @else
    @if (!empty($element['onclick']))
      <a onclick="{!! $element['onclick'] !!}" title="{!! $element['title'] !!}">
    @else
      <a href="{!! $element['link'] !!}" title="{!! $element['title'] !!}">
    @endif
      <em class="fa fa-{!! $element['icon'] !!} fa-2x"></em>
    </a>
  @endif
@endforeach
