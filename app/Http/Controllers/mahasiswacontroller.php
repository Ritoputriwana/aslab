<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\mahasiswa;
use Validator;

class mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::paginate(6);
        return view("mahasiswa.index", compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = mahasiswa::get();
        return view("mahasiswa.create", compact('mahasiswa'));
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
            'nim'       => 'required|integer|min:1',
            'nama'      => 'required|string|min:1',
            'email'     => 'required|string|min:1',
            'semester'  => 'required|integer|min:1',
            'alamat'    => 'required|string|min:1',
            'no_hp'     => 'required|string|min:1',
            ])->validate();
        mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        $mahasiswa = mahasiswa::where('nim', $nim)->firstOrFail();
        return view("mahasiswa.show", compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        $mahasiswa = mahasiswa::where('nim', $nim)->firstOrFail();
        $mahasiswas = mahasiswa::get();
        return view('mahasiswa.edit', compact('mahasiswa', 'mahasiswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        Validator::make($request->all(),[
            'nim' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|string',
            ])->validate();
        mahasiswa::findOrfail($nim)->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        // mahasiswa::findOrfail($nim)->delete();
        mahasiswa::where('nim',"=", $nim)->delete();
        return redirect()->route('mahasiswa.index');
    }
}
