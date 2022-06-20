<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Blog $blog)
    {

        $blog = Blog::latest()->paginate(6);
        SEOTools::setTitle("بلاگ");
        SEOTools::setDescription("");
        SEOTools::opengraph()->setUrl('https://soorinaz.ir/blog/all');
        SEOTools::setCanonical('https://soorinaz.ir/blog/all');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@soorinaz');
        SEOTools::jsonLd()->setSite('https://soorinaz.ir/blog/all');

        SEOMeta::addKeyword(['بلاگ سورین آز']);
        return  view('Blog.all', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        SEOTools::setTitle($blog->title);
        SEOTools::setDescription($blog->description);
        SEOTools::opengraph()->setUrl('https://test.ir/blog/all');
        SEOTools::setCanonical('https://test.ir/blog/detail'.$blog->slug);
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@test');
        SEOTools::jsonLd()->setSite('https://test.ir/blog/detail/'.$blog->slug);

        SEOMeta::addKeyword([$blog->keywords]);
        return  view('Blog.detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
