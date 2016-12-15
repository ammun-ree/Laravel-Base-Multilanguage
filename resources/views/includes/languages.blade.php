<?php

/**/
$locales = LaravelLocalization::getSupportedLocales();


 /**/ ?>
@foreach ($locales as $key => $value)
<a href="{{ LaravelLocalization::setLocale($key)}}">{{$value['native']}}</a>
@endforeach
