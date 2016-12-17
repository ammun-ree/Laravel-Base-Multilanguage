@extends('layouts.default')
@section('content')
<h1>{{trans('pages.events')}}
</h1>
@foreach ($events as $event)
<h2>{{$event->title}}</h2>
<h2>{{$event->starting_date}}</h2>

@endforeach
@stop
