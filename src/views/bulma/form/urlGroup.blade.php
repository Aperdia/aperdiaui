@extends('aperdiaui::form.bulma._inputGroup')

@section('formInput')
  {!! Form::url($name, $value, array_merge(['class' => 'input', 'inputmode' => 'url'], (array) $attributes)) !!}
@stop
