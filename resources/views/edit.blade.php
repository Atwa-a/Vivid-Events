@extends('layout')

@section('content')
<h2>Edit Event</h2>
<form action="/events/{{ $event->id }}" method="POST">
    @csrf
    @method('PUT')
    <p>Name: <input type="text" name="name" value="{{ $event->name }}" required></p>
    <p>Type: <input type="text" name="type" value="{{ $event->type }}" required></p>
    <p>Price (£): <input type="number" name="price" value="{{ $event->price }}" step="0.01" required></p>
    <p>Review: <textarea name="review">{{ $event->review }}</textarea></p>
    <p>Date: <input type="date" name="date" value="{{ $event->date }}" required></p>
    <p><button type="submit" class="btn">Update</button></p>
</form>
@endsection
