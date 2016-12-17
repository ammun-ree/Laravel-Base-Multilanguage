@extends('layouts.default')
@section('content')

<h3>{{trans('pages.publications')}}</h3>
@foreach ($publications as $publication)
{{$publication->title}}
{{$publication->text}}
{{$publication->category->slug}}


@endforeach

@stop
