<{!! $tag.HTML::attributes($attributes) !!}>

@if ($close === true)
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>
@endif

  {!! $message !!}
</{!! $tag !!}>
