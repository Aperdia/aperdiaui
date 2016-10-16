<div class="form-group">
  <div class="col-md-offset-2 col-md-10">
    {!! Form::submit($options['submit_title'], \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'btn btn-primary')) !!}

    @if (isset($options['cancel_url']))
      {!! link_to($options['cancel_url'], trans('form.cancel')) !!}
    @endif

    @if (isset($options['reset']) && $options['reset'] === true)
      {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
    @endif
  </div>
</div>
