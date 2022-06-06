<?php

namespace App\Http\Controllers;

use App\Models\Product_images;  
use App\Models\Products_images;
use Illuminate\Http\Request;

class Produkimage extends Controller
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
        $data = Products_images::create($request->all());
        if ($request->File('image')) {
            $request->file('image')->move('photostudent/', $request->file('image')->getClientOriginalName());
            $data->photo = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect('/table')->with('alert', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products_images  $products_images
     * @return \Illuminate\Http\Response
     */
    public function show(Products_images $products_images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products_images  $products_images
     * @return \Illuminate\Http\Response
     */
    public function edit(Products_images $products_images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products_images  $products_images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products_images $products_images)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products_images  $products_images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products_images $products_images)
    {
        //
    }
}
