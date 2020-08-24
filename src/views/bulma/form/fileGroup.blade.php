<div class="field">
@if ($title != '')
  {!! Form::label($name, $title, ['class' => 'label']) !!}
@endif

  <div class="control
  @if (! empty($icon['pre']))
    has-icons-left
  @endif
  @if (! empty($icon['post']))
    has-icons-right
  @endif
  ">
    {!! Form::file($name, array_merge(['class' => 'input'], (array) $attributes)) !!}

  @if (! empty($icon['pre']))
    <span class="icon is-small is-left">
      <em class="fa fa-{!! $icon['pre'] !!}"></em>
    </span>
  @endif
  @if (! empty($icon['post']))
    <span class="icon is-small is-right">
      <em class="fa fa-{!! $icon['post'] !!}"></em>
    </span>
  @endif

  @if ($help != '')
    <p class="help">{!! $help !!}</p>
  @endif

  @if (! is_null($errors) && $errors->has($name))
    <p class="help is-danger">{!! $errors->first($name) !!}</p>
  @endif
  </div>
</div>

