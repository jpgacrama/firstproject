<!DOCTYPE html>
<html lang="en">

<body>
    <header>
        @include('layouts.header')
    </header>

    @yield('content')

    <!-- Footer -->
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>
