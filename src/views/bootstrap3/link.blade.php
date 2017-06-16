@foreach ($elements as $element)
  @if (!empty($element['onclick']))
    <a onclick="{!! $element['onclick'] !!}" title="{!! $element['title'] !!}">
  @else
    <a href="{!! $element['link'] !!}" title="{!! $element['title'] !!}">
  @endif
    <i class="fa fa-{!! $element['icon'] !!} fa-2x"></i>
  </a>
@endforeach
