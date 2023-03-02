<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller

{
    public function index()
    {
        $projects = Project::paginate(5);
        return response()->json([
            'success' => true,
            'result' => $projects,
        ]);
    }

    public function show(Project $project)
    {
        return response()->json([
            'success' => true,
            'result' => $project,
        ]);
    }
}
