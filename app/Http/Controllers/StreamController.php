<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stream;

class StreamController extends Controller
{
    public function index()
{
    $streams = Stream::where('start_time', '>=', now()->startOfWeek())
                     ->where('start_time', '<=', now()->endOfWeek())
                     ->get();
    return view('streams.index', compact('streams'));
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'platform' => 'required',
        'link' => 'required|url',
        'start_time' => 'required|date',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('thumbnail')) {
        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
    }

    Stream::create([
        'title' => $request->title,
        'platform' => $request->platform,
        'link' => $request->link,
        'start_time' => $request->start_time,
        'thumbnail' => $thumbnailPath,
    ]);

    return redirect()->back()->with('success', 'Stream added successfully!');
}
}
