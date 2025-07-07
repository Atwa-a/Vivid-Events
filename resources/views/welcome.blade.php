<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivid Events | Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to <span>Vivid Events</span></h1>
            <p>UK’s premium event planning company that turns moments into memories. From elegant weddings to vibrant social gatherings — we bring your dreams to life.</p>
            <div class="cta">
                <a href="{{ route('events.index') }}" class="btn">Craft a Memory</a>
                <a href="#about" class="btn-outline">Learn More</a>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="section" id="about">
        <h2>Why Choose <span>Vivid Events</span>?</h2>
        <p class="subtitle">We blend creativity, professionalism, and passion in every event.</p>
        <div class="cards">
        <div class="card purple">
            <div class="emoji">🎨</div>
            <h3>Custom Experiences</h3>
            <p>From romantic garden weddings to bold corporate launches, every event is a bespoke story.</p>
        </div>

        <div class="card blue">
            <div class="emoji">🧠</div>
            <h3>Smart Planning</h3>
            <p>We use tech-driven tools and timelines to keep your event stress-free and perfectly on track.</p>
        </div>

        <div class="card pink">
            <div class="emoji">📸</div>
            <h3>Visual Magic</h3>
            <p>We create aesthetic spaces that photograph beautifully and feel even better in person.</p>
        </div>

        <div class="card green">
            <div class="emoji">🌟</div>
            <h3>Flawless Execution</h3>
            <p>On the big day, our team works behind-the-scenes to make sure everything goes perfectly — like magic.</p>
        </div>

        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <h2>Crafting Events That Tell Your Story</h2>
        <p></p>
        <a href="{{ route('events.create') }}" class="btn">Plan My Event</a>
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
