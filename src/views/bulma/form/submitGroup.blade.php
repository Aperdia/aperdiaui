<div>
  {!! Form::submit($options['submit_title'], \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'button')) !!}

  @if (isset($options['cancel_url']))
    {!! link_to($options['cancel_url'], trans('form.cancel')) !!}
  @endif

  @if (isset($options['reset']) && $options['reset'] === true):
    {!! Form::reset('Reset', ['class' => 'button']) !!}
  @endif
</div>
