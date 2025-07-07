<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
    // Used for home (index.blade.php)
    $events = Event::latest()->paginate(4); // paginated
    return view('index', compact('events'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'type'   => 'required',
            'price'  => 'required|numeric',
            'review' => 'nullable',
            'date'   => 'required|date',
        ]);

        Event::create($request->all());

        return redirect('/')->with('success', 'Event created.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect('/')->with('success', 'Event updated.');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/')->with('success', 'Event deleted.');
    }

    public function gallery()
    {
    // Used for /gallery (gallery.blade.php)
    $events = Event::latest()->paginate(4);
    return view('gallery', compact('events'));
    }

}
