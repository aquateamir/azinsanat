<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Projects $projects)
    {
        $blog = Projects::latest()->paginate(6);
        return view('admin.projects.all', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        return view('admin.projects.add', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Projects $blog, Request $request)
    {
        $request->validate(
            [
                'image' => 'required',
                'image_alt' => 'required',
                'keywords' => 'required',
                'title' => 'required',
                'description' => 'required',
                'fulltext' => 'required',
            ]
        );


        $file = $request->file('image');
        $filename = time() . $file->getClientOriginalName();
        $path = public_path('/projects/images');
        $file->move($path, $filename);
        $blog = Projects::create(
            [
                'image' => '/projects/images/' . $filename,
                'image_alt' => $request->input('image_alt'),
                'keywords' => $request->input('keywords'),
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'fulltext' => $request->input('fulltext'),
            ]
        );
        $blog->categories()->attach(request('category'));
        return back()->with('success', 'با موفقیت ثبت شد');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Projects::findOrFail($id);
        return view('admin.projects.all', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Projects::findOrFail($id);
        $cat = Category::all();

        return view('admin.projects.edit', compact('blog', 'cat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Projects::findOrFail($id);
        $file = $request->file('image');
        if (file_exists($file)) {
            $filename = time() . $file->getClientOriginalName();
            $path = public_path('/projects/images');
            $file->move($path, $filename);
            $blog->image = '/projects/images/' . $filename;
            $blog->image_alt = $request->input('image_alt');
            $blog->keywords = $request->input('keywords');
            $blog->title = $request->input('title');
            $blog->description = $request->input('description');
            $blog->fulltext = $request->input('fulltext');

            $blog->save();
            $blog->categories()->attach(request('category'));

        }else{
            $blog->image = $blog->image;
            $blog->image_alt = $request->input('image_alt') ?? $blog->image_alt;
            $blog->keywords = $request->input('keywords') ?? $blog->keywords;
            $blog->title = $request->input('title') ?? $blog->title;
            $blog->description = $request->input('description') ??  $blog->description;
            $blog->fulltext = $request->input('fulltext') ?? $blog->fulltext;
            $blog->save();
            DB::table('category_projects')->where('projects_id', $id)->delete();
            $blog->categories()->attach(request('category'));

        }
        return back()->with('success', 'با موفقیت ویرایش شد');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Projects::findOrFail($id);

        $blog->delete();
        return back()->with('success', 'با موفقیت حذف شد!');
    }
}
