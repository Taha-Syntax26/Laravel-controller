<?php
$bat = "Kookabura";
$model = "Jos The Boss";
?>


@php
$bat = "Kookabura";
$model = "Jos The Boss";
@endphp

@if(2>1)
<h1>Hello From IF/ELSE</h1>
@endif
<h1>Hello {{$bat}} . {{$model}}</h1>