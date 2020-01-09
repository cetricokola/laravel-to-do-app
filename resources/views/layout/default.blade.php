<!doctype html>

<html>
<head>

    @include('includes.head')

</head>

<body>
<div>
@include('includes.header')
<div class="container">
    @yield('content')
</div>
<footer class="row">
    @include('includes.footer')
</footer>
</div>

</body>

</html>
