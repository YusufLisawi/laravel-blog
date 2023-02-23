<!DOCTYPE html>
<html lang="en">

<head>
    @yield('meta')
</head>

<body>
    @include('header')
    <article>
        @yield('content')
    </article>
    @include('footer')
</body>

</html>
