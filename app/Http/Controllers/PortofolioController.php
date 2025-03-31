<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortofolioController extends Controller
{
    public function index(){
        $projects = Project::latest('id')->get();
        
        return view('Portofolio', compact('projects'));
    }
}
