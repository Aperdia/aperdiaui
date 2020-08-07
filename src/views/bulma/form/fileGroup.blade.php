@extends('aperdiaui::form.bulma._inputGroup')

@section('formInput')
  {!! Form::file($name, array_merge(['class' => 'input'], (array) $attributes)) !!}
@stop
