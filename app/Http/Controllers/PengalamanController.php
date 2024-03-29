<?php

namespace App\Http\Controllers;

use App\Models\Pengalamans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengalamans = Pengalamans::all();

        return view('admin.pengalaman.index',[
            'pengalamans' => $pengalamans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengalamans = Pengalamans::all();
        return view('admin.pengalaman.create',[
            'pengalamans' => $pengalamans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input('nmjurusan'));
       $request->validate([
        'pengalaman' => 'required', 
        'tahun' => 'required',
        'keterangan' => 'required',
    ]);

    // dd($request->nmjurusan);
    Pengalamans::create([
        'pengalaman' => $request->pengalaman,
        'tahun' => $request->tahun,
        'keterangan' =>  $request->keterangan,
    ]);

    return redirect()->route('admin.pengalaman.index')->with(['success' => 'Organization created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengalamans = Pengalamans::where('id', $id)->first();
        return view('admin.pengalaman.show', [
            'pengalamans' => $pengalamans
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengalamans = Pengalamans::all();
        $pengalamans = Pengalamans::where('id', $id)->first();
        return view('admin.pengalaman.edit', [
            'pengalamans' => $pengalamans,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pengalaman' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
    
        $pengalamans = Pengalamans::find($id);
        $pengalamans->update($request->all());
    
        return redirect()->route('admin.pengalaman.index')
            ->with('success', 'Organization updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengalamans = Pengalamans::find($id);

        if ($pengalamans === null) {
            return Redirect::route('admin.pengalaman.index')->with('error', 'Record not found');
        }
    
        $pengalamans->delete();
    
        return redirect()->route('admin.pengalaman.index')->with('success', 'Berhasil Dihapus');
    }
}
