@if (!is_null($errors) && $errors->has($name))
  <div class="form-group has-error">
@else
  <div class="form-group">
@endif

@if ($label)
  <label for="{!! $name !!}" class="col-md-2 control-label">{!! $title !!}</label>
  <div class="col-md-10">
@else
  <div class="col-md-12">
@endif

@if ($iconpost || $iconpre)
  <div class="input-group">
@endif

@if ($iconpre)
  <span class="input-group-addon"><span class="{!! $iconpre !!}"></span></span>
@endif

  {!! $text !!}

@if ($iconpost)
  <span class="input-group-addon"><span class="{!! $iconpost !!}"></span></span>
@endif

@if ($iconpost || $iconpre)
  </div>
@endif

@if (!empty($help))
  <span class="help-block">{!! $help !!}</span>
@endif

@if (!is_null($errors) && $errors->has($name))
  <span class="text-danger">{!! $errors->first($name) !!}</span>
@endif

</div></div>
