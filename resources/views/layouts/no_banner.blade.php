<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.__head')
</head>
<body>
    @include('includes.__nav')
    @yield('content')
    @include('includes.__footer')
</body>
</html>