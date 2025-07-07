<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vivid Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <a href="{{ route('welcome') }}" class="logo">Vivid Events</a>

        <nav>
            <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('services') }}" class="{{ request()->is('services') ? 'active' : '' }}">What we Offer</a>
            <a href="{{ route('pricing') }}" class="{{ request()->is('pricing') ? 'active' : '' }}">Pricing</a>
            <a href="{{ route('gallery') }}" class="{{ request()->is('gallery') ? 'active' : '' }}">Gallery</a>
            <a href="{{ route('events.create') }}" class="{{ request()->is('events/create') ? 'active' : '' }}">Get a Quote</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container">
        @yield('content')
    </main>


    <footer class="footer" style="background-color: #222; color: #fff; text-align: center; padding: 20px 10px; font-family: Arial, sans-serif;">
        <p style="margin: 0; font-size: 16px;">&copy; {{ date('Y') }} <strong>Vivid Events</strong>. All rights reserved to <strong>Aly Atwa</strong>.</p>
 
     <div style="margin-top: 10px;">
        <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none;">Facebook</a>
        <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none;">Instagram</a>
        <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none;">Contact</a>
     </div>
    </footer>


</body>
</html>
