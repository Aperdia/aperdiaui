@extends('aperdiaui::form.bulma._inputGroup')

@section('formInput')
  {!! Form::text($name, $value, array_merge(['class' => 'input'], (array) $attributes)) !!}
@stop
