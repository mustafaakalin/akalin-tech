<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Tüm projeleri al
        $projects = Project::all();

        // Verileri 'projects.index' görünümüne gönder
        return view('projects', compact('projects'));
    }

    public function detail($id)
    {
        $project = Project::findOrFail($id);
        return view('projectdetail', compact('project'));
    }
}
