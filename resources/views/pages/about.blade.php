@extends('layouts.default')
@section('content')

<h1>{{trans('pages.about')}}</h1>
{{$organization->about_text}}

@stop
