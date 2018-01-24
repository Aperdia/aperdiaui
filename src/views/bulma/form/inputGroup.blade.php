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
      <em class="fa fa-{!! $iconpre !!}"></em>
    </span>
  @endif
  @if ($iconpost != '')
    <span class="icon is-small is-right">
      <em class="fa fa-{!! $iconpost !!}"></em>
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
