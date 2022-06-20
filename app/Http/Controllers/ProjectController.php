<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Projects;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Projects $projects)
    {
        $projects = Projects::latest()->paginate(6);
        return  view('projects.all', compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $project)
    {
        $other = Projects::latest()->paginate(2);
        SEOTools::setTitle($project->title);
        SEOTools::setDescription($project->description);
        SEOTools::opengraph()->setUrl('https://soorinaz.ir/project/all');
        SEOTools::setCanonical('https://soorinaz.ir/project/detail'.$project->slug);
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@soorinaz');
        SEOTools::jsonLd()->setSite('https://soorinaz.ir/project/detail/'.$project->slug);

        SEOMeta::addKeyword([$project->keywords]);
        return view('projects.detail', compact('project', 'other'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
