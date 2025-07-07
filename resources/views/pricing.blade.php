@extends('layout')

@section('content')

<section style="text-align: center; max-width: 1100px; margin: 0 auto;">
  <h2 style="font-size: 38px; font-family: 'Playfair Display', serif;">Our Pricing Packages</h2>
  <p class="subtitle" style="margin-bottom: 50px; color: #666;">Choose the experience that fits your vision & celebration scale.</p>

  <div class="cards pricing">
    <div class="price-card">
      <h3>Essential</h3>
      <p class="desc">Perfect for cozy, personal gatherings</p>
      <p class="price">£499 / event</p>
      <ul>
        <li>Up to 50 guests</li>
        <li>Basic decoration & layout</li>
        <li>5-hour full coordination</li>
      </ul>
    </div>

    <div class="price-card featured">
      <div class="badge">Most Popular</div>
      <h3>Premium</h3>
      <p class="desc">Designed for modern events with flair</p>
      <p class="price">£1299 / event</p>
      <ul>
        <li>Up to 150 guests</li>
        <li>Premium decor & theme support</li>
        <li>8-hour event support</li>
        <li>Photography coverage</li>
      </ul>
    </div>

    <div class="price-card">
      <h3>Elite</h3>
      <p class="desc">Luxury, large-scale, full production</p>
      <p class="price">£2999 / event</p>
      <ul>
        <li>Unlimited guests</li>
        <li>Venue branding & custom designs</li>
        <li>End-to-end management</li>
      </ul>
    </div>
  </div>
</section>

<section class="section gray-bg" style="text-align: center; margin-top: 80px;">
  <h3 style="font-size: 28px; margin-bottom: 10px;">Payment Instructions</h3>
  <p style="max-width: 700px; margin: 0 auto; line-height: 1.8; font-size: 16px; color: #444;">
    All payments for event bookings are to be made via bank transfer.
    Once payment is received, your booking will be confirmed via email with a summary invoice.
  </p>

  <div style="margin-top: 40px; background: #fff; display: inline-block; text-align: left; padding: 30px 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
    <p><strong>Account Name:</strong> Vivid Events Ltd</p>
    <p><strong>Bank:</strong> Bank of Events UK</p>
    <p><strong>Account Number:</strong> 34XX 78XX 23XX</p>
    <p><strong>Sort Code:</strong> 12-XX-45</p>
    <p><strong>Reference:</strong> Your Event Name</p>
  </div>
</section>

@endsection
