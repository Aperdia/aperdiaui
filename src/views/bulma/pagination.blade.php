<nav class="pagination is-centered" role="navigation" aria-label="pagination">
  <ul class="pagination-list">
@foreach ($pagination as $key => $value)
  @if ($value === 'current')
    <li>
      <a class="pagination-link is-current" aria-label="Page {!! $key !!}" aria-current="page">
        {!! $key !!} <span class="sr-only">(current)</span>
      </a>
    </li>
  @elseif ($value === 'more')
    <li><span class="pagination-ellipsis">&hellip;</span></li>
  @else
    <li><a href="{!! $url !!}&amp;p={!! $key !!}" class="pagination-link" aria-label="Goto page {!! $key !!}">{!! $key !!}</a></li>
  @endif
@endforeach
  </ul>
</nav>
