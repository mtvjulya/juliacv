<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function projectsHome()
    {


        $Projects = Projects::orderBy('id')->get();

        return $Projects;
    }
}
