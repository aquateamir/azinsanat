<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.Products.add');

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
        $path = public_path('/product/images');
        $file->move($path, $filename);
        $blog = Products::create(
            [
                'image' => '/product/images/' . $filename,
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
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        $blog = Products::latest()->paginate(6);
        return  view('admin.Products.all', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::findOrFail($id);

        return view('admin.Products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $product = Products::findOrFail($id);
        $file = $request->file('image');
        if (file_exists($file)) {
            $filename = time() . $file->getClientOriginalName();
            $path = public_path('/product/images');
            $file->move($path, $filename);
            $product->image = '/product/images/' . $filename;
            $product->image_alt = $request->input('image_alt');
            $product->keywords = $request->input('keywords');
            $product->title = $request->input('title');
            $product->description = $request->input('description');
            $product->fulltext = $request->input('fulltext');

            $product->save();

        }else{
            $product->image = $product->image;
            $product->image_alt = $request->input('image_alt') ?? $product->image_alt;
            $product->keywords = $request->input('keywords') ?? $product->keywords;
            $product->title = $request->input('title') ?? $product->title;
            $product->description = $request->input('description') ??  $product->description;
            $product->fulltext = $request->input('fulltext') ?? $product->fulltext;
            $product->save();

        }
        return back()->with('success', 'با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::findOrFail($id);

        $products->delete();
        return back()->with('success', 'با موفقیت حذف شد!');
    }
}
