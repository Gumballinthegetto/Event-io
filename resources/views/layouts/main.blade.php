<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.__head')
</head>
<body>
    @include('includes.__already_login_navbar')
    @yield('content')
    @include('includes.__footer')
</body>
</html>