<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('admin.Blog.add');
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
        $path = public_path('/blog/images');
        $file->move($path, $filename);
        $blog = Blog::create(
            [
                'image' => '/blog/images/' . $filename,
                'image_alt' => $request->input('image_alt'),
                'keywords' => $request->input('keywords'),
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'fulltext' => $request->input('fulltext'),
            ]
        );
        return back()->with('success', 'با موفقیت ثبت شد');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blog = Blog::latest()->paginate(6);
        return  view('admin.Blog.all', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.Blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $file = $request->file('image');
        if (file_exists($file)) {
            $filename = time() . $file->getClientOriginalName();
            $path = public_path('/blog/images');
            $file->move($path, $filename);
            $blog->image = '/blog/images/' . $filename;
            $blog->image_alt = $request->input('image_alt');
            $blog->keywords = $request->input('keywords');
            $blog->title = $request->input('title');
            $blog->description = $request->input('description');
            $blog->fulltext = $request->input('fulltext');

            $blog->save();

        }else{
            $blog->image = $blog->image;
            $blog->image_alt = $request->input('image_alt') ?? $blog->image_alt;
            $blog->keywords = $request->input('keywords') ?? $blog->keywords;
            $blog->title = $request->input('title') ?? $blog->title;
            $blog->description = $request->input('description') ??  $blog->description;
            $blog->fulltext = $request->input('fulltext') ?? $blog->fulltext;
            $blog->save();

        }
        return back()->with('success', 'با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();
        return back()->with('success', 'با موفقیت حذف شد!');
    }
}
