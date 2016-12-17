<?php

/**/
$locales = LaravelLocalization::getSupportedLocales();


 /**/ ?>
@foreach ($locales as $key => $value)
<a href="{{ LaravelLocalization::getLocalizedURL($key)}}">{{$value['native']}}</a>
@endforeach
