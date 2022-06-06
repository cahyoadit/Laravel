<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Produk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Product::count();
        $data = Product::paginate(10);
        Product::with('category')->where('id');
        return view('table', compact('data', 'count'));
    }

    /**
     * Show the form for cd C:creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('tambahproduk', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/table')->with('alert', 'Data Berhasil Ditambah');
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
        $data = Product::find($id);
        $category = Category::get();
        return view('editproduk', compact('data','category'));
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
        $data = Product::find($id);
        $data->update($request->all());
        return redirect('/table')->with('alert', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('/table');
    }
    public function login()
    {
        return view('login');
    }
    public function loginuser(Request $request)
    {   if (Auth::attempt($request->only('email', 'password'))) {
        return redirect('/')->with('alert', 'Welcome back');
    } else {
        return redirect('/login');
    }
}
    public function register()
    {
        return view('register');
    }
 public function registeruser(Request $request){
    $data = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'remember_token' => Str::random(60)
    ]);
    return redirect('/login');
}
}
