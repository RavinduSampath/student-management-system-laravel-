<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = student::all();
        return view('students.index', compact('students'));
    }

    // Show create form
    public function create()
    {
        return view('students.create');
    }

    // Store post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'student created successfully.');
    }

    // Show edit form
    public function edit(student $post)
    {
        return view('students.edit', compact('post'));
    }

    // Update post
    public function update(Request $request, student $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'student updated successfully.');
    }

    // Delete post
    public function destroy(student $post)
    {
        $post->delete();
        return redirect()->route('students.index')
            ->with('success', 'student deleted successfully.');
    }
}
