@extends('aperdiaui::form.bulma._inputGroup')

@section('formInput')
  {!! Form::number($name, $value, array_merge(['class' => 'input', 'inputmode' => 'numeric'], (array) $attributes)) !!}
@stop
