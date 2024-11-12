<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebProjectController extends Controller
{
    public function index()
    {
        $webProjects = WebProject::all();
        return view('web_projects.index', compact('webProjects'));
    }

}
