@extends('aperdiaui::form.bulma._inputGroup')

@section('formInput')
  {!! Form::email($name, $value, array_merge(['class' => 'input', 'inputmode' => 'email'], (array) $attributes)) !!}
@stop
