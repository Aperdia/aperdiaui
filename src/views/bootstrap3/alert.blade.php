@if ($close)
    @define $class .= ' alert-dismissable';
@endif

<{!! $tag.HTML::attributes(Aperdia\AperdiaUI\Helpers::addClass($attributes, $class)) !!}>

@if ($close === true)
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>
@endif

  {!! $message !!}
</{!! $tag !!}>
