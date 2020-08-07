@extends('aperdiaui::form.bulma._inputGroup')

@section('formInput')
  {!! Form::date($name, $value, array_merge(['class' => 'input', 'inputmode' => 'date'], (array) $attributes)) !!}
@stop
