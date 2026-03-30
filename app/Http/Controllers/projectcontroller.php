<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $nama = Auth::check() ? Auth::user()->name : 'Guest';

        return view('project', compact('projects', 'nama'));
    }

    public function dashboard()
    {
        $projects = Project::latest()->get();
        return view('dashboard', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'description' => 'required',
            'tech_stack' => 'nullable|string',
            'project_url' => 'nullable|url'
        ]);

       Project::create([
    'judul'       => $request->judul,
    'description' => $request->description,
    'project_url' => $request->project_url,
    // Kita ubah string dari input menjadi array agar cocok dengan $casts di Model
    'tech_stack'  => $request->tech_stack ? explode(',', $request->tech_stack) : [],
]);

        return redirect()->route('dashboard')
            ->with('success', 'Project berhasil ditambahkan!');
    }

    public function edit(Project $project)
{
    $techStackInput = is_array($project->tech_stack) 
        ? implode(', ', $project->tech_stack) 
        : $project->tech_stack;

    return view('projects.edit', compact('project', 'techStackInput'));
}

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'description' => 'required',
            'tech_stack' => 'nullable|string',
            'project_url' => 'nullable|url'
        ]);

        $project->update([
            'judul' => $request->judul,
            'description' => $request->description,
            'tech_stack' => $request->tech_stack
                ? explode(',', $request->tech_stack)
                : [],
            'project_url' => $request->project_url
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Project berhasil diupdate!');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Project berhasil dihapus!');
    }
}