<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikans = Pendidikan::all();

        return view('admin.pendidikan.index',[
            'pendidikans' => $pendidikans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendidikans = Pendidikan::all();
        return view('admin.pendidikan.create',[
            'pendidikans' => $pendidikans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->input('nmjurusan'));
       $request->validate([
        'nama_instansi' => 'required', 
        'tahun_masuk' => 'required',
        'tahun_selesai' => 'required',
        'keterangan' => 'required',
    ]);

    // dd($request->nmjurusan);
    Pendidikan::create([
        'nama_instansi' => $request->nama_instansi,
        'tahun_masuk' => $request->tahun_masuk,
        'tahun_selesai' => $request->tahun_selesai,
        'keterangan' =>  $request->keterangan,
    ]);

    return redirect()->route('admin.pendidikan.index')->with(['success' => 'Jurusan created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pendidikans = Pendidikan::where('id', $id)->first();
        return view('admin.pendidikan.show', [
            'pendidikans' => $pendidikans
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendidikans = Pendidikan::all();
        $pendidikans = Pendidikan::where('id', $id)->first();
        return view('admin.pendidikan.edit', [
            'pendidikans' => $pendidikans,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_instansi' => 'required',
            'tahun_masuk' => 'required', // Ensure this line is correct
            'tahun_selesai' => 'required',
            'keterangan' => 'required',
        ]);
    
        $pendidikans = Pendidikan::find($id);
        $pendidikans->update($request->all());
    
        return redirect()->route('admin.pendidikan.index')
            ->with('success', 'Pendidikan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendidikans = Pendidikan::find($id);

        if ($pendidikans === null) {
            return Redirect::route('admin.pendidikan.index')->with('error', 'Record not found');
        }
    
        $pendidikans->delete();
    
        return redirect()->route('admin.pendidikan.index')->with('success', 'Berhasil Dihapus');
    }
}
