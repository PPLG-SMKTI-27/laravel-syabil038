<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $nama = 'Syabil';

        // AMBIL DATA DARI DATABASE
        $projects = Project::all();

        return view('project', compact('nama', 'projects'));
    }

    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        return redirect('/')
            ->with('success', 'Login berhasil!');
    }
}
