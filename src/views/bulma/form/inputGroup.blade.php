<div class="field">
@if ($title)
  {!! Form::label($name, $title, ['class' => 'label']) !!}
@endif

  <div class="control
  @if ($iconpre != '')
    has-icons-left
  @endif
  @if ($iconpost != '')
    has-icons-right
  @endif
  ">
    {!! Form::input($type, $name, $value, \Aperdia\AperdiaUI\Helpers::addClass($attributes, 'input')) !!}
    
  @if ($iconpre != '')
    <span class="icon is-small is-left">
      <i class="fa fa-{!! $iconpre !!}"></i>
    </span>
  @endif
  @if ($iconpost != '')
    <span class="icon is-small is-right">
      <i class="fa fa-{!! $iconpost !!}"></i>
    </span>
  @endif

  @if ($help != '')
    <p class="help">{!! $help !!}</p>
  @endif

  @if (!is_null($errors) && $errors->has($name))
    <p class="help is-danger">{!! $errors->first($name) !!}</p>
  @endif
  </div>
</div>
