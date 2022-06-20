<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Products $blog)
    {
        $blog = Products::latest()->paginate(6);
        SEOTools::setTitle("محصولات");
        SEOTools::opengraph()->setUrl('https://soorinaz.ir/product/all');
        SEOTools::setCanonical('https://soorinaz.ir/product/all');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@soorinaz');
        SEOTools::jsonLd()->setSite('https://soorinaz.ir/product/all');
        return  view('product.all', compact('blog'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $blog)
    {
        SEOTools::setTitle($blog->title);
        SEOTools::setDescription($blog->description);
        SEOTools::opengraph()->setUrl('https://test.ir/blog/all');
        SEOTools::setCanonical('https://test.ir/blog/detail'.$blog->slug);
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@test');
        SEOTools::jsonLd()->setSite('https://test.ir/blog/detail/'.$blog->slug);

        SEOMeta::addKeyword([$blog->keywords]);
        return  view('product.detail', compact('blog'));
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
