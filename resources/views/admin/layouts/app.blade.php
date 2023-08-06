<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.layouts.head');
</head>
<body class="sb-nav-fixed">

    @include('admin.layouts.hearder');
    @include('admin.layouts.sidebar');

    @yield('content');

    @include('admin.layouts.footer');

</body>
</html>
