@extends('layouts.default')
@section('content')
<h1>publications</h1>
@foreach ($publications as $publication)
<h2>{{$publication->title}}</h2>
@endforeach
@stop
