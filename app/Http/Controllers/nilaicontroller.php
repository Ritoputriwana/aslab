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
        return view("nilai.nilai", compact('nilais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matakuliah = matakuliah::get();
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
        return redirect()->route('nilai.nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nilai = nilai::findOrfail($id);
        return view("nilai.nilai", compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = nilai::findOrfail($id);
        $nilais = nilais::get();
        return view("nilai.nilai", compact('nilai', 'nilais'));
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
            'id_nilai' => 'required|integer',
            'id_matkul' => 'required|integer',
            'nim' => 'required|string',
            'Nilai' => 'required|string',
            ])->validate();
        nilai::findOrfail($id)->update($request->all());
        return redirect()->route('nilai.nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        nilai::findOrfail($id)->delete();
        return redirect()->route('nilai.nilai');
    }
}
