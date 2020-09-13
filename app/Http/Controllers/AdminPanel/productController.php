<?php

namespace App\Http\Controllers\adminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hameye_mahsolat = Product::all();
        return view('AdminPanel.product.index', compact('hameye_mahsolat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'min:3', 'max:255'],
            'category' => ['required'],
            'price' => ['required'],
            'product_id' => ['required'],
            'image' => ['required'],
            'status' => ['required']
        ], [
            'title.required'=>'عنوان محصول الزامی است',
            'title.min'=>'عنوان محصول نمی تواند کمتر از 3  کارکتر باشد',
            'title.max'=>'عنوان محصول نمی تواند بیشتر از 255 کارکتر باشد',
            'category.required'=>'دسته بندی محصول الزامی است',
            'price.required'=>'قیمت محصول الزامی است',
            'product_id.required'=>' شناسه محصول الزامی است',
            'image.required'=>' عکس محصول الزامی است',
            'status.required'=>' وضعیت محصول الزامی است',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
