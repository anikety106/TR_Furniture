<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{


    public function blog()
    {
        $dashboard = Blog::all(); // Adjust as needed
        return View('admin.dashboard', compact('dashboard'));
    }
    public function dashboard()
    {
        return View('admin.dashboard', compact('dashboard'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            // Store the image in the public/uploads directory
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('blog')->with('success', 'Blog post created successfully!');
    }
}
