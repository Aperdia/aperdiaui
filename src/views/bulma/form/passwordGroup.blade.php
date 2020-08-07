@extends('aperdiaui::form.bulma._inputGroup')

@section('formInput')
  {!! Form::password($name, array_merge(['class' => 'input'], (array) $attributes)) !!}
@stop
