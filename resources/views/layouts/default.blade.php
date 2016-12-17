<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body class="

  @if (LaravelLocalization::getCurrentLocale() === 'ar')
    rtl
    font-family-rtl
  @else
    ltr
    font-family-ltr
  @endif

">

@include('includes.languages')

  @include('includes.sidebar')


    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</body>
</html>
