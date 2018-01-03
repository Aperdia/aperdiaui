<div{!! HTML::attributes(Aperdia\AperdiaUI\Helpers::addClass($attributes, 'modal')) !!}>
  <div class="modal-background"></div>
  <div class="modal-content">
    {!! $content !!}
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>
