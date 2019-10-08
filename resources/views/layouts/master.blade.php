<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="super_container">
        
        <!-- Header -->
        <header class="header trans_300">
            @include('includes.header')
        </header>

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>