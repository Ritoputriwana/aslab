<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nilai;
use App\mahasiswa;
use App\matakuliah;
use Validator;

class nilaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilais = nilai::paginate(6);
        // return $nilais;
        return view("nilai.index", compact('nilais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matakuliah = nilai::get();
        return view("nilai.nilai", compact('matakuliah'));
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
            'id_nilai' => 'required|integer',
            'id_matkul' => 'required|integer',
            'nim' => 'required|string',
            'Nilai' => 'required|string',
            ])->validate();
        nilai::create($request->all());
        return redirect()->route('nilai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_nilai)
    {
        $nilai = nilai::where('id_nilai', $id_nilai)->firstOrFail();
        return view("nilai.show", compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_nilai)
    {
        $nilai = nilai::where('id_nilai', $id_nilai)->firstOrFail();
        $matakuliah = matakuliah::get();
        return view("nilai.edit", compact('nilai', 'matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_nilai)
    {
        Validator::make($request->all(), [
            'id_nilai'  => 'required|integer',
            'id_matkul' => 'required|integer',
            'nim'       => 'required|integer',
            'Nilai'     => 'required|integer',
            ])->validate();
        nilai::findOrfail($id_nilai)->update($request->all());
        return redirect()->route('nilai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_nilai)
    {
        nilai::findOrfail($id_nilai)->delete();
        return redirect()->route('nilai.index');
    }
}