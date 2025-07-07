@extends('layout')

@section('content')


<section style="text-align: center;">
  <h2 style="font-size: 36px;">Recent <span>Activity</span></h2>
  <table style="margin: 30px auto; width: 90%; max-width: 1000px; border-collapse: collapse; font-size: 15px;">
    <thead style="background: #f2f2f2;">
      <tr>
        <th style="padding: 12px;">Event Name</th>
        <th style="padding: 12px;">Type</th>
        <th style="padding: 12px;">Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($events as $event)
      <tr style="border-bottom: 1px solid #eee;">
        <td style="padding: 12px;">{{ $event->name }}</td>
        <td style="padding: 12px;">{{ $event->type }}</td>
        <td style="padding: 12px;">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Pagination -->
  <div style="margin-top: 20px;">
    {{ $events->links('pagination::simple-bootstrap-4') }}
  </div>
</section>

<!-- Reviews (Chessboard Style) -->
<section class="section gray-bg" style="padding-top: 60px;">
  <h2 style="text-align: center;">Client <span>Reviews</span></h2>

  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px; margin-top: 40px;">
    @php
      $reviews = [
        ['name' => 'Sarah T.', 'text' => 'Absolutely stunning wedding décor! Thank you for making it perfect!', 'stars' => 5],
        ['name' => 'James H.', 'text' => 'Professional, thoughtful, and truly creative. Exceeded expectations!', 'stars' => 4],
        ['name' => 'Aisha K.', 'text' => 'Unforgettable birthday setup – cozy, joyful and well-coordinated.', 'stars' => 5],
        ['name' => 'Marcus W.', 'text' => 'Loved the cultural vibe for our festival! Vibrant and heartfelt.', 'stars' => 4],
        ['name' => 'Elena G.', 'text' => 'From planning to execution, everything was perfectly managed.', 'stars' => 5],
      ];
    @endphp

    @foreach($reviews as $index => $review)
    <div class="card" style="background: {{ $index % 2 == 0 ? '#fef9ff' : '#f3f4f6' }}; transform: translateY({{ $index % 2 == 0 ? '0' : '20px' }});">
      <h4 style="margin-bottom: 10px;">{{ $review['name'] }}</h4>
      <p style="color: #666; font-style: italic;">"{{ $review['text'] }}"</p>
      <p style="color: #fbbf24; font-size: 20px;">
        {!! str_repeat('★', $review['stars']) !!}{!! str_repeat('☆', 5 - $review['stars']) !!}
      </p>
    </div>
    @endforeach
  </div>
</section>

@endsection
