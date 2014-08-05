@extends('master')

@section('content')
{{ Form::open(array('action' => 'KontaktController@sendMail')) }}
<?php
echo Form::label('ime', 'Ime:');
echo Form::text('ime');
echo Form::label('email', 'Email:');
echo Form::email('email');
echo Form::label('predmet', 'Predmet:');
echo Form::text('predmet');
echo Form::label('poruka', 'Poruka:');
echo Form::textarea('poruka');
echo Form::submit('Posalji');
?>
{{ Form::close() }}
@stop