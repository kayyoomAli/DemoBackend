<!DOCTYPE html>
<html lang="en">
<head>
   @include('user.layouts.head');
</head>
<body class="sb-nav-fixed">

    @include('user.layouts.hearder');
    @include('user.layouts.sidebar');

    @yield('content');

    @include('user.layouts.footer');

</body>
</html>
