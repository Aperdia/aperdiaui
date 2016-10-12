@foreach ($elements as $element)
  @if ($element['type'] === 'link')
    <a href="{!! $element['link'] !!}" title="{!! $element['title'] !!}"><i class="fa fa-{!! $element['icon'] !!} fa-2x"></i></a>
  @elseif ($element['type'] === 'divider')
    <br><br>
  @endif
@endforeach
