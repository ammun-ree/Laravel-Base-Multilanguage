@extends('layouts.default')
@section('content')

<h1>Psychologues Solidaires</h1>
<h3>publications</h3>
@foreach ($publications as $publication)
{{$publication->title}}
@endforeach
@stop
