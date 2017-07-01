<ol{!! HTML::attributes(Aperdia\AperdiaUI\Helpers::addClass($attributes, 'breadcrumb')) !!} itemscope itemtype="http://schema.org/BreadcrumbList">

@php
  $position = 1;
@endphp

@foreach ($elements as $element)
  <li {!! HTML::attributes($element['attributes']) !!} itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

  @if (isset($element['link']) && !empty($element['link']))
    <a itemprop="item" href="{!! $element['link'] !!}"><span itemprop="name">{!! $element['title'] !!}</span></a>
  @else
    <span itemprop="name">{!! $element['title'] !!}</span>
  @endif
    <meta itemprop="position" content="{!! $position !!}" />
  </li>

  @php
    $position++;
  @endphp
@endforeach
</ol>
