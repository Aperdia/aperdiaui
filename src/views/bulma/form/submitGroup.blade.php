<div class="field">
  {!! Form::submit($options['submit_title'], array_merge(['class' => 'button is-link'], (array) $attributes)) !!}

  @if (isset($options['cancel_url']))
    {!! link_to($options['cancel_url'], trans('form.cancel'), ['class' => 'button is-white']) !!}
  @endif

  @if (isset($options['reset']) && $options['reset'] === true)
    {!! Form::reset(trans('aperdiaui::ui.Reset'), ['class' => 'button is-white']) !!}
  @endif
</div>
