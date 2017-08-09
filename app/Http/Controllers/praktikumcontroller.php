<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikumcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = praktikum::paginate(6);
        return view("praktikum.index", compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $praktikum = praktikum::get();
        return view("praktikum.index", compact('praktikum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'id_praktikum' => 'required|integer',
            'nama_praktikum' => 'required|string'
            ])->validate();
        praktikum::create($request->all());
        return redirect()->route('praktikum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = praktikum::findOrfail($id);
        return view("praktikum.index", compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = praktikum::findOrfail($id);
        $categories = praktikum::get();
        return view("praktikum.edit", compact('article', 'categories'))
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
        Validator::make($request->all(), [
            'id_praktikum' => 'required|integer',
            'nama_praktikum' => 'required|string'
            ])->validate();
        praktikum::findOrfail($id)->update($request->all());
        return redirect()->route('praktikum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        praktikum::findOrfail($id)->delete();
        return redirect()->route('praktikum.index');
    }
}
