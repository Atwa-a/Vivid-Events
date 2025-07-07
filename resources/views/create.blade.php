@extends('layout')

@section('content')
<section style="min-height: 75vh; display: flex; justify-content: center; align-items: center;">
  <form action="/events" method="POST" style="width: 100%; max-width: 600px;">
    @csrf

    <h2 style="text-align: center; margin-bottom: 20px; font-family: 'Playfair Display', serif; font-size: 36px;">
    GET A QUOTE
    </h2>
    <p class="subtitle" style="text-align: center; font-family: 'Montserrat', sans-serif; font-size: 16px;">
    Whether it's a royal wedding or your dog’s birthday bash <br>
    we'd love to hear from you!
    </p>

    <div style="margin-bottom: 20px;">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required class="input-field">
    </div>

    <div style="margin-bottom: 20px;">
      <label for="type">Type</label>
      <input type="text" name="type" id="type" required class="input-field">
    </div>

    <div style="margin-bottom: 20px;">
      <label for="price">Budget (£)</label>
      <input type="number" name="price" id="price" step="0.01" required class="input-field">
    </div>

    <div style="margin-bottom: 20px;">
      <label for="review">Descripe in short what you desire till we get back to you :) </label>
      <textarea name="review" id="review" rows="4" class="input-field"></textarea>
    </div>

    <div style="margin-bottom: 20px;">
      <label for="date">Date</label>
      <input type="date" name="date" id="date" required class="input-field">
    </div>

    <div style="text-align: center;">
      <button type="submit" class="btn">DONE</button>
    </div>
        <div label for="">>
    </div>
  </form>
</section>
@endsection
