<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
  @include('includes.sidebar')


    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
