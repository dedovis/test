<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use PDF;
use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ujian::all();
        return view('welcome',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ujian = Ujian::create($request->all());

        return redirect()->route('ujian_index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ujian $ujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ujian $ujian)
    {
        // $ujian = ujian::findOrFail($id);
        return view('edit',compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ujian $ujian)
    {
        $ujian->update($request->all());

        return redirect()->route('ujian_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ujian $ujian)
    {
        $ujian->delete();
        return redirect()->route('ujian_index');
    }

    public function cetak(){
        $ujian = Ujian::all();

        return view('cetak',compact('ujian'));
    }
}
