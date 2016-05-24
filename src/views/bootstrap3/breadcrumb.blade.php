@if ($cover === true)
  <div class="cover">
    <div class="row align-middle">
      <div class="small-12">
@endif

<ol{!! HTML::attributes($attributes) !!} itemprop="breadcrumb">

@foreach ($elements as $element)
  <li {!! HTML::attributes($element['attributes']) !!}>

  @if (isset($element['link']) && !empty($element['link']))
    <a href="{!! $element['link'] !!}">{!! $element['title'] !!}</a>
  @else
    {!! $element['title'] !!}
  @endif

  </li>
@endforeach
</ol>

@if ($cover === true)
      </div>
    </div>
  </div>
@endif
