<div class="dropdown is-hoverable">
  <div class="dropdown-trigger">
    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
      <span>{!! $title !!}</span>
      <span class="icon is-small">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
    <div class="dropdown-content">
  @foreach ($elements as $element)
    @if ($element['type'] === 'link')
      <a href="{!! $element['link'] !!}" class="dropdown-item">
      @if ($element['icon'] != '')
        <i class="fa fa-{!! $element['icon'] !!} fa-2x"></i>
      @endif
        {!! $element['title'] !!}
      </a>
    @elseif ($element['type'] === 'divider')
      <hr class="dropdown-divider">
    @elseif ($element['type'] === 'text')
      <div class="dropdown-item">
        <p>{!! $element['text'] !!}</p>
      </div>
    @endif
  @endforeach
    </div>
  </div>
</div>