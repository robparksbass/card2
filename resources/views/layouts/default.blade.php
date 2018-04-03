<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
        <header class="row pageheader">
            @include('includes.header')
        </header>
        @yield('content')
        <footer class="row pageFooter">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>