<div{!! HTML::attributes(Aperdia\AperdiaUI\Helpers::addClass($attributes, 'modal')) !!}>
  <div class="modal-background"></div>
  <div class="modal-card">
  @if ($hasHeader)
    <header class="modal-card-head">
      <p class="modal-card-title">{!! $title !!}</p>
      <button class="delete" aria-label="close"></button>
    </header>
  @endif
    <section class="modal-card-body">
      {!! $content !!}
    </section>
  @if ($hasFooter && $buttonSuccess != '')
    <footer class="modal-card-foot">
      <button class="button is-success">{!! $buttonSuccess !!}</button>
    @if ($buttonCancel != '')
      <button class="button">{!! $buttonCancel !!}</button>
    @endif
    </footer>
  @endif
  </div>
</div>
