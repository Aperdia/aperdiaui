@php
  $position = 1;
  $nbrElements = count($elements);
@endphp

<nav{!! HTML::attributes(Aperdia\AperdiaUI\Helpers::addClass($attributes, 'breadcrumb is-centered')) !!} aria-label="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
  <ul>
  @foreach ($elements as $element)
    @if ($position === $nbrElements)
      @php
        $element['attributes'] = Aperdia\AperdiaUI\Helpers::addClass($element['attributes'], 'is-active');
      @endphp
    @endif

    <li {!! HTML::attributes($element['attributes']) !!} itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
      @if (isset($element['link']) && $element['link'] != '')
        <a itemprop="item" href="{!! $element['link'] !!}"><span itemprop="name">{!! $element['title'] !!}</span></a>
      @elseif ($position === $nbrElements)
        <a itemprop="item" href="#" aria-current="page">{!! $element['title'] !!}</a>
      @else
        <a itemprop="item" href="#"><span itemprop="name">{!! $element['title'] !!}</span></a>
      @endif
      <meta itemprop="position" content="{!! $position !!}" />
    </li>
    @php
      $position++;
    @endphp
  @endforeach
  </ul>
</nav>
