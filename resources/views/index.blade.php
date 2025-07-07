<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vivid Events | UK Event Specialists</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>

<body>
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

 <!-- Hero -->
  <section class="hero">
    <h1>Crafting <span>Unforgettable</span> Moments</h1>
    <p>Professional event planning services for weddings, corporate events, and special occasions across the UK</p>
    <div class="cta-buttons">
      <a href="{{ route('services') }}" class="btn">Explore Services</a>
      <a href="{{ route('gallery') }}" class="btn-outline">View Gallery</a>
    </div>
  </section>


  <!-- Services -->
<section class="section" id="services">
  <h2>Our <span>Services</span></h2>
  <p class="subtitle">We design events that feel personal, look breathtaking, and run seamlessly.</p>

  <div class="cards">

    <div class="card purple">
      <h3 style="font-size: 24px; color: #6B21A8; font-weight: 700; letter-spacing: 0.5px;">
        Personal Milestones
      </h3>
      <p>From intimate garden proposals to grand anniversary dinners — we turn your life’s moments into unforgettable experiences tailored just for you.</p>
    </div>

    <div class="card blue">
      <h3 style="font-size: 24px; color: #2563eb; font-weight: 700; letter-spacing: 0.5px;">
        Corporate Gatherings
      </h3>
      <p>Professional yet vibrant. We organize conferences, launches & team retreats that inspire, impress, and spark genuine connections.</p>
    </div>

    <div class="card pink">
      <h3 style="font-size: 24px; color: #db2777; font-weight: 700; letter-spacing: 0.5px;">
        Whimsical Parties
      </h3>
      <p>Quirky, themed, or all-out glamorous — we bring personality into every detail, from decor to activities, for parties that dazzle.</p>
    </div>

    <div class="card green">
      <h3 style="font-size: 24px; color: #059669; font-weight: 700; letter-spacing: 0.5px;">
        Charity & Culture
      </h3>
      <p>Fundraisers, community festivals, and cultural showcases — we help you gather people for good causes with style, warmth, and purpose.</p>
    </div>

  </div>
</section>

  <!-- Pricing -->
  <section class="section gray-bg" id="pricing">
    <h2>Simple, Transparent <span>Pricing</span></h2>
    <p class="subtitle">Choose the perfect package for you</p>
    
  </section>

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
