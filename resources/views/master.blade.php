<!DOCTYPE html>
<html lang="en">

<head>
    @yield('meta')
    @vite('resources/css/app.css')
</head>

<body>
    @include('header')
    <article class="container mx-auto px-12">
        @yield('content')
    </article>
    @include('footer')
</body>

</html>
