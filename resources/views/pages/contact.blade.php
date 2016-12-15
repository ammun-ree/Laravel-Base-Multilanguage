@extends('layouts.default')
@section('content')
<h1>{{trans('pages.contact')}}</h1>
{{$organization->contact_email}}

@stop
