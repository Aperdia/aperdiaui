@php
$values = [null => '--'];

for ($hour = 0; $hour < 24; ++$hour) {
    if ($hour < 10) {
        $hour = '0'.$hour;
    }

    for ($minute = 0; $minute < 60; ++$minute) {
        if ($minute < 10) {
            $minute = '0'.$minute;
        }

        $values[$hour.':'.$minute] = $hour.':'.$minute;

        $minute += 29;
    }
}
@endphp

{!! Form::selectGroup($name, $title, $values, $value, $attributes, $help) !!}
